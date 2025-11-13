<?php
session_start();

$sesnama = "";
if (isset($_SESSION["sesnama"])):
  $sesnama = $_SESSION["sesnama"];
endif;

$sesemail = "";
if (isset($_SESSION["sesemail"])):
  $sesemail = $_SESSION["sesemail"];
endif;

$sespesan = "";
if (isset($_SESSION["sespesan"])):
  $sespesan = $_SESSION["sespesan"];
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
      &#9776;
    </button>
    <nav>
      <ul>
        <li><a href="#home">Beranda</a></li>
        <li><a href="#entry-data">Entry Data</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home">
      <h2>Selamat Datang</h2>
      <?php
      echo "halo dunia!<br>";
      echo "nama saya natasya";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>

    <section id="entry-data">
      <h2>Entry Data Mahasiswa</h2>
      <form action="proses_mahasiswa.php" method="POST">

        <label for="txtNamaMhs"><span>NIM:</span>
          <input type="text" id="txtNamaMhs" name="txtNamaMhs" placeholder="Masukkan NIM.." required>
        </label>

        <label for="txtNIM"><span>Nama Lengkap:</span>
          <input type="text" id="txtNIM" name="txtNIM" placeholder="Masukkan Nama Lengkap.." required>
        </label>

        <label for="txtProdi"><span>Tempat Lahir:</span>
          <input type="text" id="txtProdi" name="txtProdi" placeholder="Masukkan Tempat Lahir.." required>
        </label>

        <label for="txtEmailMhs"><span>Tanggal Lahir:</span>
          <input type="email" id="txtEmailMhs" name="txtEmailMhs" placeholder="Masukkan Tanggal Lahir.." required>
        </label>

        <label for="txtNamaMhs"><span>Hobi:</span>
          <input type="text" id="txtNamaMhs" name="txtNamaMhs" placeholder="Masukkan Hobi.." required>
        </label>

        <label for="txtNIM"><span>Pasangan:</span>
          <input type="text" id="txtNIM" name="txtNIM" placeholder="Masukkan Nama Pasangan.." required>
        </label>

        <label for="txtProdi"><span>Pekerjaan:</span>
          <input type="text" id="txtProdi" name="txtProdi" placeholder="Masukkan Pekerjaan.." required>
        </label>

        <label for="txtEmailMhs"><span>Nama Orang Tua:</span>
          <input type="email" id="txtEmailMhs" name="txtEmailMhs" placeholder="Masukkan Nama orang tua.." required>
        </label>

        <label for="txtEmailMhs"><span>Nama Adik:</span>
          <input type="email" id="txtEmailMhs" name="txtEmailMhs" placeholder="Masukkan Nama adik" required>
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>
     
    </section>
    <!-- ✅ Akhir Section Baru -->

    <section id="about">
      <?php
      $nim = 2511500066;
      $NIM = '0344300002';
      $nama = "M.KAESA DUDE LAUDIANIS KOTO";
      $Nama = 'M.KAESA DUDE LAUDIANIS KOTO';
      $tempat = "Sungailiat";
      ?>
       <h2>Tentang kami</h2>
            <p> <strong>Nama:</strong>M KAESA DUDE LAUDIANIS KOTO</p>
            <p> <strong>Nim:</strong>2511500066</p>
            <p> <strong>Tempat Lahir:</strong>SUNGAILIAT</p>
            <p> <strong>Tanggal Lahir:</strong>25 SEPTEMBER 2006</p>
            <p> <strong>Hobi:</strong>MEMANCING</p>
            <p> <strong>Pasangan:</strong>SEDANG DI USAHAKAN</p>
            <p> <strong>Pekerjaan:</strong>MAHASISWA</p>
            <p> <strong>Nama Ayah:</strong>-</p>
            <p> <strong>Nama Ibu:</strong>-</p>
            <p> <strong>Nama Kakak:</strong>-</p>
            <p> <strong>Nama Adek:</strong>-</p>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="proses.php" method="POST">
        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>

      <?php if (!empty($sesnama)): ?>
        <br><hr>
        <h2>Yang menghubungi kami</h2>
        <p><strong>Nama :</strong> <?php echo $sesnama ?></p>
        <p><strong>Email :</strong> <?php echo $sesemail ?></p>
        <p><strong>Pesan :</strong> <?php echo $sespesan ?></p>
      <?php endif; ?>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 M.KAESA DUDE LAUDIANIS KOTO [2511500066]</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>