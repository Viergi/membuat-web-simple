<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran || UNUD</title>
    <link
      rel="shortcut icon"
      href="../assets/LogoUdayana.png"
      type="image/x-icon"
    />

    <!-- style -->
    <link rel="stylesheet" href="../styles/style.css" />
    <link rel="stylesheet" href="../styles/navbar.css" />
    <link rel="stylesheet" href=../styles/pendaftaran.css />
    <link rel="stylesheet" href="../styles/loader.css" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div id="loader">
      <div class="loading"></div>
    </div>
    <nav>
      <div>
        <img src="../assets/LogoUdayana.png" alt="LogoUdayana" srcset="" />
        <h2>UNIVERSITAS UDAYANA</h2>
      </div>
      <ul>
        <li>
          <a href="beranda.html">BERANDA</a>
        </li>
        <li>
          <p>REGISTER</p>
        </li>
        <li>
          <a href="mahasiswa.html">PRESTASI</a>
        </li>
        <li>
          <a href="kontak.html">KONTAK</a>
        </li>
        <li>
          <a href="informasi.html">INFORMATION</a>
        </li>
      </ul>
    </nav>
    <nav class="nav-mobile">
      <div>
        <img src="../assets/LogoUdayana.png" alt="LogoUdayana" srcset="" />
        <h2>UNIVERSITAS UDAYANA</h2>
      </div>
      <div class="menu" onclick="mobileNav()">
        <div class="garis"></div>
        <div class="garis"></div>
        <div class="garis"></div>
      </div>
      <ul class="list-menu">
        <li>
          <a href="beranda.html">BERANDA</a>
        </li>
        <li>
          <p>REGISTER</p>
        </li>
        <li>
          <a href="mahasiswa.html">PRESTASI</a>
        </li>
        <li>
          <a href="kontak.html">KONTAK</a>
        </li>
        <li>
          <a href="informasi.html">INFORMATION</a>
        </li>
      </ul>
    </nav>
    <main>
      <img src="../assets/gedung_rektorat_unud.jpg" alt="p" />
      <h1>Formulir Pendaftaran</h1>
      <div class="gradient"></div>
      <div class="formulir">
        <form action="../src/pembayaran.php" method="post">
          <div class="container">
            <label for="nama">NAMA </label>
            <input
              type="text"
              id="nama"
              name="nama"
              class="wrapper input"
              required
              autocomplete="off"
            />
          </div>
          <div class="container">
            <label for="alamat">ALAMAT</label>
            <input
              type="text"
              id="alamat"
              name="alamat"
              class="wrapper input"
              required
              autocomplete="off"
            />
          </div>
          <div class="container">
            <label for="noTelp">No Telp</label>
            <input
              type="number"
              id="noTelp"
              name="noTelp"
              class="wrapper input"
              required
              autocomplete="off"
            />
          </div>
          <div class="container">
            <label for="email">Alamat email</label>
            <input
              type="email"
              id="email"
              name="email"
              class="wrapper input"
              required
              autocomplete="off"
            />
          </div>
          <div class="container">
            <label>Kewarganegaraan</label>
            <div class="wrapper">
              <div>
                <input
                  type="radio"
                  name="kewarganegaraan"
                  id="WNI"
                  value="WNI"
                  required
                />
                <label for="WNI">WNI</label>
              </div>
              <div>
                <input
                  type="radio"
                  name="kewarganegaraan"
                  id="WNA"
                  value="WNA"
                  required
                />
                <label for="WNA">WNA</label>
              </div>
            </div>
          </div>
          <div class="container">
            <label>Jenis Kelamin</label>
            <div class="wrapper">
              <div>
                <input
                  type="radio"
                  name="jenisKel"
                  id="jenisKel"
                  value="Laki-Laki"
                  required
                />
                <label for="Laki-Laki">Laki-Laki</label>
              </div>
              <div>
                <input
                  type="radio"
                  name="jenisKel"
                  id="jenisKel"
                  value="Perempuan"
                  required
                />
                <label for="perempuan">Perempuan</label>
              </div>
            </div>
          </div>
          <div class="container">
            <label for="agama">Agama</label>
            <div class="wrapper">
              <div>
                <input
                  type="radio"
                  name="agama"
                  id="agama"
                  value="ISLAM"
                  required
                />
                <label for="ISLAM">ISLAM</label>
              </div>
              <div>
                <input
                  type="radio"
                  name="agama"
                  id="agama"
                  value="KRISTEN KATOLIK"
                  required
                />
                <label for="KRISTEN KATOLIK">KRISTEN KATOLIK</label>
              </div>
              <div>
                <input
                  type="radio"
                  name="agama"
                  id="agama"
                  value="KRISTEN PROTESTAN"
                  required
                />
                <label for="KRISTEN PROTESTAN">KRISTEN PROTESTAN</label>
              </div>
              <div>
                <input
                  type="radio"
                  name="agama"
                  id="agama"
                  value="BUDDHA"
                  required
                />
                <label for="BUDDHA">BUDDHA</label>
              </div>
              <div>
                <input
                  type="radio"
                  name="agama"
                  id="agama"
                  value="HINDU"
                  required
                />
                <label for="HINDU">HINDU</label>
              </div>
            </div>
          </div>
          <div class="container">
            <label for="tanggalLahir">Tanggal Lahir</label>
            <input
              type="date"
              id="tanggalLahir"
              name="tanggalLahir"
              class="wrapper input date"
              required
              autocomplete="off"
            />
          </div>
          <div class="container">
            <label for="tempatLahir">Tempat Lahir</label>
            <input
              type="text"
              id="tempatLahir"
              name="tempatLahir"
              class="wrapper input"
              required
              autocomplete="off"
            />
          </div>
          <div class="container">
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan" class="wrapper input" required>
              <option value="TEKNIK KOMPUTER">TEKNIK KOMPUTER</option>
              <option value="KEDOKTERAN">KEDOKTERAN</option>
              <option value="KEDOKTERAN GIGI">KEDOKTERAN GIGI</option>
              <option value="PSIKOLOGI">PSIKOLOGI</option>
              <option value="SP1 ILMU ANESTESI DAN TERAPI INTENSIF">
                SP1 ILMU ANESTESI DAN TERAPI INTENSIF
              </option>
              <option value="SP1 ILMU BEDAH">SP1 ILMU BEDAH</option>
              <option value="SP1 ILMU KANDUNGAN">SP1 ILMU KANDUNGAN</option>
              <option value="SP1 ILMU ORTHOPAEDI DAN TRAUMATOLOGI">
                SP1 ILMU ORTHOPAEDI DAN TRAUMATOLOGI
              </option>
              <option value="SP1 KARDIOLOGI">SP1 KARDIOLOGI</option>
              <option value="ILMU HUKUM">ILMU HUKUM</option>
              <option value="ADMINISTRASI NEGARA">ADMINISTRASI NEGARA</option>
              <option value="D3 PERPUSTAKAAN">D3 PERPUSTAKAAN</option>
              <option value="HUBUNGAN INTERNASIONAL">
                HUBUNGAN INTERNASIONAL
              </option>
              <option value="ILMU KOMUNIKASI">ILMU KOMUNIKASI</option>
              <option value="ILMU POLITIK">ILMU POLITIK</option>
              <option value="ILMU SOSIOLOGI">ILMU SOSIOLOGI</option>
              <option value="ILMU KELAUTAN">ILMU KELAUTAN</option>
              <option value="MANAJEMEN SUMBERDAYA PERAIRAN">
                MANAJEMEN SUMBERDAYA PERAIRAN
              </option>
              <option value="AGRIBISNIS">AGRIBISNIS</option>
              <option value="AGROTEKNOLOGI">AGROTEKNOLOGI</option>
              <option value="AKUNTANSI">AKUNTANSI</option>
              <option value="MANAJEMEN">MANAJEMEN</option>
              <option value="PROFESI AKUNTAN">PROFESI AKUNTAN</option>
              <option value="BIOLOGI">BIOLOGI</option>
              <option value="FARMASI">FARMASI</option>
              <option value="FISIKA">FISIKA</option>
              <option value="ILMU KOMPUTER">ILMU KOMPUTER</option>
              <option value="KIMIA">KIMIA</option>
              <option value="MATEMATIKA">MATEMATIKA</option>
              <option value="PROFESI APOTEKER">PROFESI APOTEKER</option>
              <option value="KEDOKTERAN HEWAN">KEDOKTERAN HEWAN</option>
              <option value="D4 PARIWISATA">D4 PARIWISATA</option>
              <option value="DESTINASI PARIWISATA">DESTINASI PARIWISATA</option>
              <option value="INDUSTRI PERJALANAN WISATA">
                INDUSTRI PERJALANAN WISATA
              </option>
              <option value="ARSITEKTUR PERTAMANAN">
                ARSITEKTUR PERTAMANAN
              </option>
              <option value="TEKNOLOGI PANGAN">TEKNOLOGI PANGAN</option>
              <option value="TEKNOLOGI INDUSTRI PERTANIAN">
                TEKNOLOGI INDUSTRI PERTANIAN
              </option>
              <option value="TEKNIK SIPIL">TEKNIK SIPIL</option>
              <option value="TEKNIK PERTANIAN DAN BIOSISTEM">
                TEKNIK PERTANIAN DAN BIOSISTEM
              </option>
              <option value="TEKNIK MESIN">TEKNIK MESIN</option>
              <option value="TEKNIK ELEKTRO">TEKNIK ELEKTRO</option>
              <option value="SP1 THT">SP1 THT</option>
              <option value="SP1 PSIKIATRI">SP1 PSIKIATRI</option>
              <option value="SP1 PENYAKIT SYARAF">SP1 PENYAKIT SYARAF</option>
              <option value="SP1 PENYAKIT DALAM">SP1 PENYAKIT DALAM</option>
              <option value="ANTROPOLOGI BUDAYA">ANTROPOLOGI BUDAYA</option>
              <option value="ARKEOLOGI">ARKEOLOGI</option>
              <option value="ILMU SEJARAH">ILMU SEJARAH</option>
              <option value="SASTRA BALI">SASTRA BALI</option>
              <option value="SASTRA INDONESIA">SASTRA INDONESIA</option>
              <option value="SASTRA INGGRIS">SASTRA INGGRIS</option>
              <option value="SASTRA JAWA KUNO">SASTRA JAWA KUNO</option>
              <option value="SASTRA JEPANG">SASTRA JEPANG</option>
            </select>
          </div>
          <div class="container button">
            <input type="submit" value="DAFTAR" />
            <input type="reset" value="BATAL" />
          </div>
        </form>
      </div>
    </main>
    <footer>&copy; Code by Kelompok 6</footer>
    <script src="../script/loader.js"></script>
    <script src="../script/mobileNav.js"></script>
  </body>
</html>
