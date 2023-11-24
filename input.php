<?php
    $kecamatan = $_POST['kecamatan'];
    $koordinat_x = $_POST['koordinat_x'];
    $koordinat_y = $_POST['koordinat_y'];
    $luas = $_POST['luas'];
    $jumlah_penduduk = $_POST['jumlah_penduduk'];
    $banjir = $_POST['banjir'];
    $gempa_bumi = $_POST['gempa_bumi'];
    $tanah_longsor = $_POST['tanah_longsor'];

    // Sesuaikan dengan setting MySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sleman_bencana";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO bencana (kecamatan, koordinat_x, koordinat_y, luas, jumlah_penduduk, banjir, gempa_bumi, tanah_longsor)
    VALUES ('$kecamatan', $koordinat_x, $koordinat_y, $luas, $jumlah_penduduk, $banjir, $gempa_bumi, $tanah_longsor)";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    //header("Location: index2.html");
    //exit;
    ?>

