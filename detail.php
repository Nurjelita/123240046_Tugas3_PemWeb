<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM pendaftar WHERE id=$id");
$d = mysqli_fetch_assoc($data);
?>
<h2>Detail Data Pendaftar</h2>
<p>Nama: <?= $d['nama']; ?></p>
<p>NIM: <?= $d['nim']; ?></p>
<p>Email: <?= $d['email']; ?></p>
<p>Prodi: <?= $d['prodi']; ?></p>
<p>Minat: <?= $d['minat'] ? $d['minat'] : '-'; ?></p>
<a href="index.php">Kembali</a>
