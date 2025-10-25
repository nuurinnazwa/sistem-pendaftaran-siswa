<?php
include 'koneksi.php';
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header("Location: beranda.php");
    } else {
        echo "<script>alert('Username atau password salah!');
        window.location='login.php';</script>";
    }
}
?>