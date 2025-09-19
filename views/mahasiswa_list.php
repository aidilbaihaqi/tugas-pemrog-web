<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <a href="index.php?action=create">+ Tambah Mahasiswa</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th> <!-- nomor urut manual -->
            <th>ID</th> <!-- id asli dari database -->
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php 
        $no = 1; // mulai nomor dari 1
        while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $no++; ?></td> <!-- tampilkan nomor urut -->
            <td><?= $row['id']; ?></td> <!-- tampilkan id asli -->
            <td><?= $row['nim']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['jurusan']; ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $row['id']; ?>">Edit</a> |
                <a href="index.php?action=delete&id=<?= $row['id']; ?>" 
                   onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
