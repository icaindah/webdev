<?php

require_once "conn.php";

//tampil data semua
$sql = "SELECT * from mahasiswa ORDER BY `no` ASC";

//tampil data individu
$sqlindividu = "SELECT * from mahasiswa where `no`=2";

$result = $conn->query($sql);

if(result->num_rows > 0) {

    while ($row = $result->fetch_assoc()){
        echo $row['no']."|".$row['nim']."|".$row['nama']."|".$row['jns_kelamin']."|".$row['tgl_lahir']."|".$row['alamat'];
        echo "<br>";
    }
} else {
    echo "Result : 0";
}