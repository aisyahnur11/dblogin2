<?php

$db = mysqli_connect("localhost","root","","sekolah");

$result = mysqli_query($db, "SELECT * FROM siswa");
// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    <div class="container mt-5">
      <h1>D A T A S I S W A</h1>
        <div class="d-grip gap-2 col-12">
        <a href="adduser.php" class="btn btn-dark mb-3">Add User</a>
    <table class="table table-dark table-hover table-borderless">
  <thead>
    <tr style="text-align:center;">
      <th scope="col">No</th>
      <th scope="col">Nis</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?=$row['nis'];?></td>
      <td><?=$row['nama'];?></td>
      <td><?=$row['kelas'];?></td>
      <td>
        <a href="updateF.php?nis=<?=$row['nis'];?>" class="btn btn-sm btn-light ml-auto">Update</a>

        <a href="delete.php?nis=<?=$row['nis'];?>" class="btn btn-sm btn-danger ml-auto">Delete</a>
      </td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    </div>
    </div>
</body>
</html>