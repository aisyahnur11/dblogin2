<?php
session_start();

if(isset($_SESSION["username"])){
    header("location:beranda.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sessionF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div style="padding:50px;text-align:center;">
    <form action="session.php" method="POST" class="container mt-5">
        <h1>L O G I N</h1>
        <div class="mb-3">
            <label>Username</label><br>
            <input type="text" name="username" >
        </div>
        <br>
        <div class="mb-3">
            <label>Password</label><br>
            <input type="password" name="password">
        </div>
        <br><input type="submit" value="Login" class="btn btn-primary"><br>
        </form>
</body>
</html>