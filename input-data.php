<?php

require_once "conn.php";

$sql = "INSERT INTO mahasiswa 
        (`nim`, `nama`, `jns_kelamin`, `tpt_lahir`, `tgl_lahir`, `alamat`) VALUES 
        ('19280005', 'Liqi', 'Laki-Laki', 'China', '2001-10-12', 'Jl. Melati')";

if ($_POST['INPUT'] == "input"){

    require_once "conn.php";

    $sql = "INSERT INTO mahasiswa 
        (`nim`, `nama`, `jns_kelamin`, `tpt_lahir`, `tgl_lahir`, `alamat`) VALUES 
        ('".$_POST['nim']."', '".$_POST['nama']."', '".$_POST['jns_kelamin']."', '".$_POST['tpt_lahir']."', '".$_POST['tgl_lahir']."', '".$_POST['alamat']."')";

if ($conn->query($sql)=== TRUE) {
    echo "New Record Data Success";
}else {
    echo "Error". $sql . "<br>" . $conn->error;
}

} else {
echo "Restricted Area"; 

}