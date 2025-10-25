<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Register | Pendaftaran Siswa</title>
  <style>
    body {
      font-family: Arial;
      background: #e0f2f1;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    form {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      width: 320px;
    }
    h2 { text-align: center; color: #004d40; }
    input {
      width: 100%; padding: 10px; margin: 8px 0;
      border: 1px solid #ccc; border-radius: 5px;
    }
    button {
      width: 100%; padding: 10px;
      background: #00796b; color: white;
      border: none; border-radius: 5px;
      cursor: pointer;
    }
    button:hover { background: #004d40; }
  </style>
</head>
<body>

<form action="proses_register.php" method="POST">
  <h2>Form Register</h2>
  <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
  <input type="email" name="email" placeholder="Email" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit" name="register">Daftar</button>
  <p style="text-align:center;">Sudah punya akun? <a href="login.php">Login</a></p>
</form>

</body>
</html>