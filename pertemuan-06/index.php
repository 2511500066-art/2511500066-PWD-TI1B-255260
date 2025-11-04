<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul halaman halo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>INI HEADER</h1>
        <button class="menu-toggle" id="menuToggle" aria-label="toggle navigasi">
            &#9776;
        </button>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h2>Selamat Datang</h2>
            <p>ini contoh paragraf HTML.</p>
        </section>
        <section id="about">
            <?php
            $nama = "M KAESA DUDE LAUDIANIS KOTO &#128526";
            $nim = "2511500066";
            $tempat_lahir = "SUNGAILIAT";
            $tanggal_lahir = "25 September 2006";
            $hobi = "Memancinng";
            $pasangan = "-";
            $pekerjaan = "MAHASISWA";
            $orang_tua = "-";
            $kakak = "-";
            $adik = "-";
            ?>
            <h2>Tentang kami</h2>
            <P>
                <strong>NAMA :</strong>
                <?php
                echo "$nama";
                ?>
            </P>


            <p>
               <strong>NIM :</strong>
               <?php
               echo "$nim"
              ?> 
            </p>


            <p> <strong>Tempat lahir:</strong>
               <?php
               echo"$tempat_lahir"
               ?> 
            </p>   


             <p> <strong>tanggal_lahir:</strong>
               <?php
               echo"$tanggal_lahir"
               ?> 
            </p>   


              <p> <strong>Hobi:</strong>
               <?php
               echo"$hobi"
               ?> 
            </p>   


              <p> <strong>Pasangan:</strong>
               <?php
               echo"$pasangan"
               ?> 
            </p>   


              <p> <strong>pekerjaan:</strong>
               <?php
               echo"$pekerjaan"
               ?> 
            </p>   


              <p> <strong>orang tua:</strong>
               <?php
               echo"$orang_tua"
               ?> 
            </p>   


              <p> <strong>kakak:</strong>
               <?php
               echo"$kakak"
               ?> 
            </p>   


              <p> <strong>adikk:</strong>
               <?php
               echo"$adik"
               ?> 
            </p>   



        </section>
        <section id="contact">
            <h2>Kontak Kami</h2>
            <form action="" method="GET">

                <label for="TxtNama">
                    <span>Nama:</span>
                    <input type="text" id="TxtNama" name="TxtNama" placeholder="Masuk Nama" required
                        autocomplete="name">
                </label>

                <label for="Txtemail">
                    <span>Email:</span>
                    <input type="Email" id="texemail" placeholder="Masuk email" required autocomplete="email">
                </label>

                <label for="Txtpesan">
                    <span>Pesan:</span>
                    <textarea id="Txtpesan" name="Txtpesan" Rows="4" placeholder="Tulis Pesan Anda..."
                        required></textarea>
                </label>

                <button Type="Submit">Kirim</button>
                <button Type="Reset">Batal</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 M KAESA DUDE LAUDIANIS KOTO [2511500066]</p>
    </footer>

    <script src="scipt.js"></script>

</body>

</html>