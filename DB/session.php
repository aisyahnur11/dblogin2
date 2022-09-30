<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$db = new PDO("mysql:host=localhost;dbname=sekolah","root","");
$query = $db->query("SELECT * FROM user WHERE username='$username'  AND password='$password'");
$data=$query->fetch();

if($query->rowCount()>0){
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    header("location:beranda.php");
    }else{
        header("location:login.php");
    }