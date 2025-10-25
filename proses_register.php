<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $nama = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "INSERT INTO register (nama_lengkap, email, password)
              VALUES ('$nama', '$email', '$password')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Pendaftaran berhasil! Silakan login.');
        window.location='login.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan, coba lagi.');
        window.location='register.php';</script>";
    }
}
?>