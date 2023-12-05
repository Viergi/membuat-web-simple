<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pembayaran || UNUD</title>
    <link
      rel="shortcut icon"
      href="../assets/LogoUdayana.png"
      type="image/x-icon"
    />

    <!-- style -->
    <link rel="stylesheet" href="../styles/style.css" />
    <link rel="stylesheet" href="../styles/navbar.css" />
    <link rel="stylesheet" href="../styles/pembayaran.css" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php 
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $noTelp = $_POST['noTelp'];
      $email = $_POST['email'];
      $kewarganegaraan = $_POST['kewarganegaraan'];
      $jenisKel = $_POST['jenisKel'];
      $agama = $_POST['agama'];
      $tanggalLahir = $_POST['tanggalLahir'];
      $tempatLahir = $_POST['tempatLahir'];
      $jurusan = $_POST['jurusan'];
    ?>
    <div class="bayar">
      <div class="loading"></div>
      <h1 class="berhasil">Pembayaran Sukses</h1>
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
          <a href="pendaftaran.php">REGISTER</a>
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
          <a href="pendaftaran.php">REGISTER</a>
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
      <img src="../assets/gedung_rektorat_unud.jpg" alt="" />
      <h1>Pembayaran</h1>
      <div class="gradient"></div>
      <div class="data-formulir">
        <div class="container">
          <h3>Nama</h3>
          <p><?php echo $nama?></p>
        </div>
        <div class="container">
          <h3>Alamat</h3>
          <p><?php echo $alamat?></p>
        </div>
        <div class="container">
          <h3>No Telp</h3>
          <p><?php echo $noTelp?></p>
        </div>
        <div class="container">
          <h3>Alamat email</h3>
          <p><?php echo $email?></p>
        </div>
        <div class="container">
          <h3>Kewarganegaraan</h3>
          <p><?php echo $kewarganegaraan?></p>
        </div>
        <div class="container">
          <h3>Jenis Kelamin</h3>
          <p><?php echo $jenisKel?></p>
        </div>
        <div class="container">
          <h3>Agama</h3>
          <p><?php echo $agama?></p>
        </div>
        <div class="container">
          <h3>Tanggal lahir</h3>
          <p><?php echo $tanggalLahir?></p>
        </div>
        <div class="container">
          <h3>Tempat Lahir</h3>
          <p><?php echo $tempatLahir?></p>
        </div>
        <div class="container">
          <h3>Jurusan</h3>
          <p><?php echo $jurusan?></p>
        </div>
        <div class="container">
          <div class="button" onclick="bayar()">BAYAR</div>
          <a class="button" href="pendaftaran.html">BATAL</a>
        </div>
      </div>
    </main>
    <footer>&copy; Code by Kelompok 6</footer>
    <script src="../script/mobileNav.js"></script>
    <script src="../script/bayar.js"></script>
  </body>
</html>
