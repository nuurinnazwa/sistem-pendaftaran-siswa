  <?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "sistem_pendaftaran_siswa";

  //koneksi
  $koneksi = mysqli_connect($host, $user, $pass, $db);

  // cek koneksi
  if (!$koneksi) {
    die("koneksi database gagal: ".mysqli_connect_error());
  }else{

  }
?>
  
  