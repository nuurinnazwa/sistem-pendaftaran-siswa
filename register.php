<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Register | Pendaftaran Siswa</title>
  <style>
    body {
      font-family: Arial;
      background: #a1c7c5ff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      
    }
    form {
      background: white;
      padding: 30px;
      border-radius: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      width: 320px;
    }

    h2 { text-align: center; color: #176bacff; }

    input {
      width: 90%; padding: 10px; margin: 8px auto;
      border: 1px solid #ccc; border-radius: 5px; display: block;
      
    }
    button {
      width: 100%; padding: 10px;
      background: #269baaff; color: white;
      border: none; border-radius: 5px;
      cursor: pointer; margin: 10px auto; display: block;
    }
    button:hover { background: #175b63ff; }
  </style>
</head>
<body>

<form action="proses_register.php" method="POST">
  <h2> Register & Login</h2>
  <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
  <input type="email" name="email" placeholder="Email" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit" name="register">Daftar</button>
  <p style="text-align:center;">Sudah punya akun? <a href="login.php">Login</a></p>
</form>

</body>
</html>