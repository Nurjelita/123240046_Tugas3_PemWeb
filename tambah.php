<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $prodi = $_POST['prodi'];
    $minat = isset($_POST['minat']) ? implode(", ", $_POST['minat']) : '-';

    mysqli_query($conn, "INSERT INTO pendaftar (nama, nim, email, prodi, minat) VALUES ('$nama','$nim','$email','$prodi','$minat')");
    header("Location: index.php");
}
?>
<form method="post">
    <h2>Form Tambah Data</h2>
    Nama: <input type="text" name="nama" required><br>
    NIM: <input type="text" name="nim" required><br>
    Email: <input type="email" name="email" required><br>
    Prodi: <input type="text" name="prodi"><br>
    Minat:<br>
    <input type="checkbox" name="minat[]" value="AI">AI
    <input type="checkbox" name="minat[]" value="Web">Web
    <input type="checkbox" name="minat[]" value="IoT">IoT
    <br><br>
    <button type="submit" name="submit">Simpan</button>
</form>
