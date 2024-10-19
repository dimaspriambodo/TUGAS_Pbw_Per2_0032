<?php 
include 'database.php';
$db = new Database;
$detail = $db->editData($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP CRUD - Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <h1>OOP PHP CRUD</h1>
        <h2>Edit Data</h2>
        <hr class="mt-0">

        <form method="POST" action="proses.php?aksi=update" enctype="multipart/form-data">
            <?php foreach ($detail as $dataUser) { ?>
            <input type="hidden" name="id" value="<?php echo $dataUser['id'] ?>">
            
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $dataUser['nama'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required><?php echo $dataUser['alamat'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $dataUser['nohp'] ?>" required>
            </div>
            
            <!-- Input untuk foto -->
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>

            <!-- Input untuk jenis kelamin -->
            <div class="mb-3">
                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-control" id="jeniskelamin" name="jeniskelamin" required>
                    <option value="Laki-laki" <?php if ($dataUser['jeniskelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                    <option value="Perempuan" <?php if ($dataUser['jeniskelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                </select>
            </div>

            <!-- Input untuk email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $dataUser['email'] ?>" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <?php } ?>
        </form>
    </div>
</body>
</html>