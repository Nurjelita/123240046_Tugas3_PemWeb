<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM pendaftar WHERE id=$id");
$d = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $prodi = $_POST['prodi'];
    $minat = isset($_POST['minat']) ? implode(", ", $_POST['minat']) : '-';

    mysqli_query($conn, "UPDATE pendaftar SET nama='$nama', nim='$nim', email='$email', prodi='$prodi', minat='$minat' WHERE id=$id");
    header("Location: index.php");
}
?>
<form method="post">
    <h2>Update Data</h2>
    Nama: <input type="text" name="nama" value="<?= $d['nama']; ?>"><br>
    NIM: <input type="text" name="nim" value="<?= $d['nim']; ?>"><br>
    Email: <input type="email" name="email" value="<?= $d['email']; ?>"><br>
    Prodi: <input type="text" name="prodi" value="<?= $d['prodi']; ?>"><br>
    Minat:<br>
    <input type="checkbox" name="minat[]" value="AI" <?= strpos($d['minat'], 'AI') !== false ? 'checked' : ''; ?>>AI
    <input type="checkbox" name="minat[]" value="Web" <?= strpos($d['minat'], 'Web') !== false ? 'checked' : ''; ?>>Web
    <input type="checkbox" name="minat[]" value="IoT" <?= strpos($d['minat'], 'IoT') !== false ? 'checked' : ''; ?>>IoT
    <br><br>
    <button type="submit" name="update">Update Data</button>
</form>
