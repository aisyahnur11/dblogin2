<?php

$nis = $_GET['nis'];

$db = new PDO("mysql:host=localhost;dbname=sekolah",'root','');
$query = $db->query("DELETE FROM `siswa` WHERE `nis`= '$nis'");

if($query)
{
    header("location:crud.php");
}
