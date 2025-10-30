<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login | Pendaftaran Siswa</title>
  <style>
    body {
      font-family: Arial;
      background: #80A1BA;
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
      width: 300px;
      
    }
    h2 { text-align: center; color: #176bacff; }

    input {
      width: 90%;
      padding: 10px;
      margin: 8px auto;
      border: 1px solid #ccc;
      border-radius: 5px;
      display: block;
    }
    button {
      width: 100%;
      padding: 10px;
      background: #80A1BA;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin: 10px auto;
      display: block;
    }
    button:hover { background: #004d40; }
  </style>
</head>
<body>

<form action="proses_login.php" method="POST">
  <h2>Login</h2>
  <input type="text" name="username" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit" name="login">Masuk</button>
  <p style="text-align:center;">Belum punya akun? <a href="register.php">Daftar</a></p>
</form>

</body>
</html>