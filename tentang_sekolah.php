<?php

// Opsional: jika kamu sudah punya header.php dan footer.php, bisa include seperti ini
// include 'header.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Sekolah</title>
      <link rel="stylesheet" href="style.css">

</head>
<body>

  <header>
    <h1>SMK TUNAS HARAPAN</h1>
    <nav>
      <a href="beranda.php">Beranda</a>
      <a href="tentang_sekolah.php">Tentang Sekolah</a>
      <a href="informasi_pendaftaran.php">Informasi pendaftaran</a>
      <a href="pendaftaran.php">Pendaftaran</a>
      <a href="kontak.php">Kontak</a>
    </nav>
  </header>

<section class="tentang-section">
    <h1 class="judul">Tentang Sekolah</h1>
    <p class="subjudul">Mengenal lebih dekat SMK Tunas Harapan dan komitmen kami dalam pendidikan</p>

    <h2 class="subjudul-section">Profil Sekolah</h2>
    <div class="cards">

        <div class="card">
            <h3>Visi</h3>
            <p>Menjadi sekolah unggul yang menghasilkan lulusan berkualitas, berkarakter, dan berdaya saing global dengan tetap menjunjung tinggi nilai-nilai budaya bangsa.</p>
        </div>

        <div class="card">
            <h3>Misi</h3>
            <ul>
                <li>Menyelenggarakan pendidikan yang berkualitas dan berstandar internasional.</li>
                <li>Mengembangkan potensi siswa secara optimal dalam bidang akademik dan non-akademik.</li>
                <li>Membentuk karakter siswa yang berakhlak mulia dan berjiwa nasionalis</li>
            </ul>
        </div>

        <div class="card">
            <h3> Sejarah Singkat</h3>
            <p>SMK Tunas Harapan didirikan pada tahun 1989 dengan tujuan memberikan akses pendidikan berkualitas bagi masyarakat. 
            Selama lebih dari 35 tahun beroperasi, sekolah ini telah meluluskan ribuan siswa yang kini sukses di berbagai bidang. 
            Kami terus berinovasi dalam metode pembelajaran dan pengembangan fasilitas untuk memberikan pengalaman belajar terbaik bagi siswa.</p>
        </div>
    </div>

    <h2 class="subjudul-section">Prestasi Sekolah</h2>
    <div class="prestasi">
        <div class="prestasi-item"> <strong>2018</strong> - Juara 1 Welding</div>
        <div class="prestasi-item"> <strong>2020</strong> - Juara 2 CNC Turning</div>
        <div class="prestasi-item"> <strong>2020</strong> - Juara 1 Graphic Design Teknology</div>
        <div class="prestasi-item"> <strong>2022</strong> - Juara 3 Metrology</div>
        <div class="prestasi-item"> <strong>2023</strong> - Juara 1 Web Technology</div>
        <div class="prestasi-item"> <strong>2024</strong> - Juara 2 Artificial Intelligence</div>
    </div>

    <h2 class="subjudul-section">Kegiatan Ekstrakurikuler</h2>
    <div class="ekskul-grid">
        <div class="ekskul-item"> Pramuka</div>
        <div class="ekskul-item"> Futsal</div>
        <div class="ekskul-item"> Karawitan</div>
        <div class="ekskul-item"> Seni Tari</div>
        <div class="ekskul-item"> Paskib</div>
        <div class="ekskul-item"> English Club</div>
    </div>
</section>

<footer class="footer">
  <div class="footer-container">
    <div class="footer-section logo-section">
      <h2>🎓 SMK Tunas Harapan</h2>
      <p>Membentuk generasi unggul dan berakhlak mulia</p>
    </div>

    <div class="footer-section">
      <h3>Tautan Cepat</h3>
      <ul>
        <li><a href="tentang.php">Tentang Sekolah</a></li>
        <li><a href="informasi.php">Informasi Pendaftaran</a></li>
        <li><a href="formulir.php">Formulir Pendaftaran</a></li>
      </ul>
    </div>

    <div class="footer-section">
      <h3>Kontak</h3>
      <p>Jl. Pendidikan No. 123</p>
      <p>Telp: (021) 1234-5678</p>
      <p>Email: info@smktunasharapan.sch.id</p>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© 2025 SMK Tunas Harapan. All Rights Reserved.</p>
  </div>
</footer>
<style>
body {
    font-family: "Poppins", sans-serif;
    background-color: #f5f7fa;
    color: #333;
    margin: 0;
    padding: 0;
}

.tentang-section {
    max-width: 900px;
    margin: 40px auto;
    padding: 20px;
}

.judul {
    color: #fce094ff;
    font-size: 2em;
    text-align: center;
    margin-bottom: 5px;
}

.subjudul {
    text-align: center;
    font-size: 1em;
    color: #f8f2f2ff;
    margin-bottom: 40px;
}

.subjudul-section {
    color: #fce094ff;
    font-size: 1.4em;
    margin: 30px 0 15px;
    border-left: 5px solid #2196f3;
    padding-left: 10px;
}

.cards {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.card {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
}

.card h3 {
    margin-top: 0;
    color: #1e88e5;
    font-size: 1.2em;
    
    
}

.card p, .card li {
    color: #444;
    font-size: 0.95em;
    line-height: 1.6;
    text-align: justify;
    
    
}

.card ul {
    padding-left: 20px;
    
    
}

.prestasi {
    display: flex;
    flex-direction: column;
    gap: 15px;
    text-align: center;
}

.prestasi-item {
    background: #fff;
    padding: 15px 20px;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.07);
    font-size: 0.95em;
}

.ekskul-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
    gap: 15px;
    margin-top: 20px;
}

.ekskul-item {
    background: #f9fafb;
    border: 1px solid #ddd;
    padding: 15px;
    border-radius: 10px;
    text-align: center;
    font-size: 0.9em;
    transition: all 0.3s ease;
}

.ekskul-item:hover {
    background: #2196f3;
    color: white;
    transform: scale(1.05);
}
</style>
</body>
</html>