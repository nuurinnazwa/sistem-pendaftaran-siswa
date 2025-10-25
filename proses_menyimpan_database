<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "sistem_pendaftaran_siswa");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Jika tombol submit ditekan
if (isset($_POST['submit'])) {
    $nama = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query insert
    $query = "INSERT INTO register (nama_lengkap, email, password) 
              VALUES ('$nama_lengkap', '$email', '$password')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>