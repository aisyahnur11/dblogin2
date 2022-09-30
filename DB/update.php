<?php

$nis=$_POST['nis'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];

$db = new PDO("mysql:host=localhost;dbname=sekolah",'root','');
$query = $db->query("UPDATE `siswa` set `nama`='$nama',`kelas`='$kelas' WHERE `nis`='$nis'");
 
if($query){
header ("location:crud.php");
}