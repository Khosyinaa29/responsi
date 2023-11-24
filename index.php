<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
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
    $sql = "SELECT * FROM bencana";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1px'><tr>
<th>kecamatan</th>
<th>koordinat_x</th>
<th>koordinat_y</th>
<th>luas</th>
<th>jumlah_penduduk</th>
<th>banjir</th>
<th>gempa_bumi</th>
<th>tanah_longsor</th>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . 
            $row["kecamatan"] . "</td><td>" .
            $row["koordinat_x"] . "</td><td align='right'>".
            $row["koordinat_y"] . "</td><td align='right'>" .
                $row["luas"] . "</td><td align='right'>" .
                $row["jumlah_penduduk"] . "</td><td align='right'>".
                $row["banjir"] ."</td><td align='right'>".
                $row["gempa_bumi"] . "</td><td align='right'>".
                $row["tanah_longsor"] . "</td></tr>"

                ;
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>

</html>