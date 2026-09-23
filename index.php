<?php
$pesan_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_kirim'])) {
    $nama = htmlspecialchars($_POST['txt_nama']);
    $email = htmlspecialchars($_POST['txt_email']);
    $pesan = htmlspecialchars($_POST['txt_pesan']);

    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        $pesan_status = "<div class='alert-succes'>Terima kasih
        <strong>$nama</strong>, pesan Anda telah berhasil dikirim ke server SMKN 5 Batam!</div>";
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="id">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>CV Jify - SMKN 5 Batam</title>
            <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <header>
        <div class="profile-info">
            <img src="img/profil.jpeg" alt="Foto Profile" class="avatar">
            <div class="bio-text">
                <h1>JIFY SILALAHI</h1>
                <p>Siswi Teknik Komputer dan Jaringan SMKN 5 BATAM</p>
            </div>
            
<nav>
    <a href="#profil">Home</a>
    <a href="#skills">Skills</a>
    <a href="#kontak">Contact</a>
    <button id="btn-theme" onclick= "toggleTheme()">🌙Dark Mode</button>
</nav>
</header>

<div class="main-content">

<div class="left-column">
    <div class="card" id="profil">
        <h2>PROFIL</h2>
        <h3>👤 BIODATA</h3>
        <p>Siswa aktif dan praktik di bidang Teknik Komputer dan Jaringan dengan fokus pada administrasi server dan keamanan jaringan.</p>

        <h3>🎓 PENDIDIKAN</h3>
        <ul>
            <li>Lulusan SD/ Theresia Batam</li>
            <li>Lulusan Smp/ Citra Bahtera Hayat</li>
            <li>Siswi Aktif di SMK 5</li>
</ul>

<h3>💡PENGALAMAN BELAJAR</h3>
<ul>
    <li>Membuat Laporan</li>
    <li>Menginstall debian</li>
    <li>Siswa TKJ di SMKN 5 BATAM</li>
</ul>
</div>
</div>

<div class="right-column">
    <div class="card" id="skills">
        <h2>NETWORK SKILLS</h2>

        <div class="skill-item">
            <span class="skill-name">Crimping Cable</span>
        <div class="progress-bar"><div class="progress-fill" style="width": 90%;></div></div>

<div class="skill-item">
    <span class="skill-name">Mendownload debian</span>
<div class="progress-bar"><div class="progress-fill" style="width: 85%;"></div></div>
</div>

<div class="skill-item">
    <span class="skill-name">Merakit PC</span>
    <div class="progress-bar"><div class="progress-fill" style="width: 80%;"></div></div>
</div>

<div class="skill-item">
    <span class="skill-name">Network Security</span>
    <div class="progress-bar"><div class="progress-fill" style="width: 75%";></div></div>
</div>
</div>

<div class="card" id="kontak">
    <h2>FORM KONTAK</h2>

    <?php echo $pesan_status; ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="txt_nama" placeholder="Masukkan nama..." required>
</div>

<div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="txt_email" placeholder="Masukkan Email..." required>
</div>

<div class="form-group">
    <label for="email">Pesan:</label>
    <input type="pesan" id="pesan" name="txt_pesan" placeholder="Masukkan Pesan..." required>
</div>

<button type="submit" name="btn_kirim" class="btn-submit">KIRIM PESAN</button>
</form>
</div>
</div>
</div>
</div>

<script src="script.js"></script>
</body>
</html>