<?php

$nis=$_POST['nis'];
$nama= htmlentities (trim($_POST['nama']));
$kelas=$_POST['kelas'];

//echo strlen($nama);
//die();
//if(empty($nama)){
  // header("location:crud.php?error=data tidak boleh kosong");}
  
  if(empty($nama)){
   $pesan__error .="data tidak boleh kosong";
  }
if($pesan__error == ""){
$db = new PDO('mysql:host=localhost;dbname=sekolah','root','');
$query = $db->query("INSERT INTO `siswa` VALUES ('$nis','$nama','$kelas')");
if($query){
    header('location:crud.php');
 }
}else{
   header("location:adduser.php?error=$pesan__error");
}