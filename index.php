<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM pendaftar");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Pendaftar</title>
</head>
<body>
<h2>Data Pendaftar</h2>
<a href="tambah.php">+ Tambah Data</a>
<br><br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Email</th>
    <th>Prodi</th>
    <th>Aksi</th>
</tr>

<?php if(mysqli_num_rows($result) > 0): ?>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['nim']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['prodi']; ?></td>
        <td>
            <a href="detail.php?id=<?= $row['id']; ?>">Detail</a> |
            <a href="update.php?id=<?= $row['id']; ?>">Update</a> |
            <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin hapus?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
<?php else: ?>
    <tr><td colspan="6">Tidak ada data.</td></tr>
<?php endif; ?>
</table>
</body>
</html>
