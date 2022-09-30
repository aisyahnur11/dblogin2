<!DOCTYPE html>
<html lang="en">
    <title>prosestambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="insert.php" method="POST" class="container mt-5">
        
    <?php if(isset($_GET['error'])) : ?>
                <div class="alert alert-danger" role="alert">
                    <p><?= $_GET['error'] ?></p>
                </div>
            <?php endif ?>

        <h1>ADD USER</h1>
        <div class="mb-3">
            <label class="form-label">Nis : </label>
            <input type="text" class="form-control" name="nis">
        </div>
        <br>
        <div class="mb-3">
            <label class="form-label">Nama : </label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <br>
        <div class="mb-3">
            <label class="form-label">Kelas : </label>
            <select name="kelas" class="form-control" id="">
                <option value="12 RPL">12 RPL</option>
                <option value="11 RPL">11 RPL</option>
                <option value="10 RPL">10 RPL</option>
            </select>
        </div>
        <input type="submit" class="btn btn-success btn-block" value="simpan">
    </form>
</body>
</html>