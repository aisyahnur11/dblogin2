<<?php

$nis = $_GET['nis'];

$db =new PDO("mysql:host=localhost;dbname=sekolah",'root','');
$query = $db->query("SELECT * FROM `siswa` WHERE `nis`='$nis'");

$data = $query->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update Data</title>
</head>
<body>
    <form action="update.php" method="POST" class="container mt-5">
    <input type="hidden" name="nis" value="<?= $nis ?>">  
        <div>
            <label class="form-label">nama</label>
            <input class="form-control" type="text" name="nama" value="<?= $data['nama'] ?>">
        </div>
        <br>
        <div>
            <label class="form-label">kelas</label>
            <select class="form-control" name="kelas" nis="">
                <option value="12 RPL" <?= $data['nis'] == '12 RPL' ? 'selected' : '' ?>>12 RPL</option>
                <option value="11 RPL" <?= $data['nis'] == '11 RPL' ? 'selected' : '' ?>>11 RPL</option>
                <option value="10 RPL" <?= $data['nis'] == '10 RPL' ? 'selected' : '' ?>>10 RPL</option>
            </select>
        </div>
        <br>
        <input type="submit" class="btn btn-warning" value="simpan">
    </form>
</body>
</html>