<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit Mahasiswa</h2>
    <form method="POST">
        NIM: <input type="text" name="nim" value="<?= $data['nim']; ?>" required><br><br>
        Nama: <input type="text" name="nama" value="<?= $data['nama']; ?>" required><br><br>
        Jurusan: <input type="text" name="jurusan" value="<?= $data['jurusan']; ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>
