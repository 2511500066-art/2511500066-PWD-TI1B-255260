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

        <section id="ipk">
            <h2>Nilai Saya</h2>
            <!-- MATKUL 1 -->
            <p><strong>NAMA MATAKULIAH 1:</strong>
            <?php
            $NamaMatkul1 = "Pemograman Web Dasar";
            echo $NamaMatkul1;
            ?>
            </p>

            <p><strong>SKS 1:</strong>
            <?php
            $sksmatkul1 = "8";
            echo $sksmatkul1;
            ?>
            </p>
            
            <p><strong>KEHADIRAN 1:</strong>
            <?php
            $nilaihadir1 = "100";
            echo $nilaihadir1
            ?>
            </p>

            <p><strong>TUGAS 1:</strong>
            <?php
            $nilaitugas1 = "100";
            echo $nilaitugas1
            ?>
            </p>

            <p><strong>UTS 1:</strong>
            <?php
            $nilaiuts1 = "100";
            echo $nilaiuts1
            ?>
            </p>

            <p><strong>UAS :</strong>
            <?php
            $nilaiUAS1 = "100";
            echo $nilaiUAS1
            ?>
            </p>

            <p><strong>NILAI AKHIR :</strong>
            <?php
            $nilaiakhir1 = (0.1 * $nilaihadir1) + (0.2 * $nilaitugas1) + (0.3 * $nilaiuts1) + (0.4 * $nilaiUAS1);
            ?>
           </p>


            <p><strong>GRADE :</strong>
            <?php
            if ($nilaihadir1 < 70) {
                $grade1 = "E";
            } elseif ($nilaiakhir1 >= 91) {
                $grade1 ="A";
            } elseif ($nilaiakhir1 >= 81) {
                $grade1 = "A-";
            } elseif ($nilaiakhir1 >= 76) {
                $grade1 = "B+";
            } elseif ($nilaiakhir1 >= 71) {
                $grade1 = "B";
            } elseif ($nilaiakhir1 >= 66) {
                $grade1 = "B-";
            } elseif ($nilaiakhir1 >= 61) {
                $grade1= "C+";
            } elseif ($nilaiakhir1 >= 56) {
                $grade1 = "C";
            } elseif ($nilaiakhir1 >= 51) {
                $grade1 = "C-";
            } elseif ($nilaiakhir1 >= 36){
                $grade1 = "D";
            }else {
                $grade1 = "E";
            }
             echo $grade;
             ?>
            </p>

            <p><strong>ANGKA MUTU</strong>
            <?php
            if ($nilaihadir1 < 70) {
                $mutu1 = "0.00";
            } elseif ($nilaiakhir1 >= 91) {
                $mutu1 = "4.00";
            } elseif ($nilaiakhir1 >= 81) {
                $mutu1 = "3.70";
            } elseif ($nilaiakhir1 >= 76) {
                $mutu1 = "3.30";
            } elseif ($nilaiakhir1 >= 71) {
                $mutu1 = "3.00";
            } elseif ($nilaiakhir1 >= 66) {
                $mutu1 = "2.70";
            } elseif ($nilaiakhir1 >= 61) {
                $mutu1 = "2.30";
            } elseif ($nilaiakhir1 >= 56) {
                $mutu1 = "1.70";
            } elseif ($nilaiakhir1 >= 51) {
                $mutu1 = "1.00";
            } else {
                $mutu1 = "0.00";
            }
            echo $mutu1;
            ?>
            </p>
            <p><strong>BOBOT :</strong>
            <?php
            $bobot1 = $mutu1 * $sksmatkul1;
            ?>
            </p>

            <p><strong>STATUS :</strong>
            <?php
            if ($grade1 == "A-") {
                $status1 = "LULUS";
            } elseif ($grade1 == "B+") {
                $status1 = "LULUS";
            }   elseif ($grade1 == "B") {
                $status1 = "LULUS";
            } elseif ($grade1 == "B-") {
                $status1 = "LULUS";
            } elseif ($grade1 == "C+") {
                $status1 = "LULUS";
            } elseif ($grade1 == "C-") {
                $status1 = "LULUS";
            } else {
                $status1 = "GAGAL";
            }
            echo $status1;
            ?>
            </p>
            
            <hr>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <hr>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <hr>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <hr>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <p><strong></strong></p>
            <hr>
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