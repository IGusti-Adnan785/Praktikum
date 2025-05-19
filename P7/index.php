<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Telkomsel Header</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: Arial, sans-serif;
      }

      .container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      .container-top {
        margin: 0 50px;
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      .top-nav {
        background: #f5f5f5;
        padding: 10px 0;
      }

      .left-menu li,
      .right-menu li {
        display: inline-block;
        margin-right: 20px;
        font-size: 10px;
      }

      .left-menu {
        margin: 0;
      }

      .left-menu a {
        color: #333;
        text-decoration: none;
        padding: 10px;
      }

      .left-menu .active {
        color: #e70f17;
        border-bottom: 2px solid #e70f17;
      }

      .right-menu a {
        color: #333;
        text-decoration: none;
        padding: 10px;
      }

      .lang-selector img {
        margin-left: 10px;
        width: 30px;
        height: 15px;
        border-radius: 100%;
      }

      .active-lang {
        border-bottom: 2px solid #e70f17;
      }

      .main-header {
        padding: 20px 0;
        background: white;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }

      .logo img {
        height: 30px;
      }

      .main-nav ul {
        list-style: none;
        display: flex;
        align-items: center;
        margin-left: 170px;
      }

      .main-nav ul li a {
        display: flex;
        align-items: center;
      }

      .menu-item {
        margin-right: 30px;
        position: relative;
        display: flex;
        align-items: center;
      }

      .main-nav a {
        color: #000000;
        text-decoration: none;
        padding: 10px;
        display: block;
        font-size: 15px;
      }

      .arrow-icon {
        color: #1a237e;
        margin-left: 5px;
      }

      .actions {
        display: flex;
        align-items: center;
      }

      .search-btn {
        background: #f5f5f5;
        border: none;
        cursor: pointer;
        margin-right: 20px;
        padding: 10px;
        border-radius: 50%;
        transition: all 0.3s ease;
      }

      .search-btn:hover {
        background: #e0e0e0;
      }

      .sign-in-btn {
        background: #e70f17;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      .sign-in-btn:hover {
        background: #c40000;
      }

      .main-container {
        max-width: 1500px;
        display: flex;
        gap: 30px;
        padding: 20px;
        margin-top: 30px;
      }

      .sidebar {
        margin-left: 260px;
        width: 250px;
        flex-shrink: 0;
      }

      .sidebar h3 {
        font-size: 16px;
        margin-bottom: 10px;
      }

      .sidebar ul {
        list-style: none;
        padding-left: 0;
      }

      .sidebar li {
        margin-bottom: 10px;
      }

      .sidebar a {
        color: #333;
        text-decoration: none;
        display: block;
        padding: 5px 0;
      }

      .sidebar a:hover {
        color: #e70f17;
      }

      .content-area {
        flex-grow: 1;
        color: #414141;
      }

      .banner {
        background: #0d1c41;
        color: white;
        padding: 30px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        gap: 20px;
        height: 190px;
        margin-top: 20px;
        margin-bottom: 20px;
      }

      .banner button {
        background: #e70f1600;
        color: white;
        border: 1px solid #ffffff;
        padding: 10px 20px;
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      .banner img {
        max-width: 80%;
        height: 190px;
        width: auto;
      }

      .recommendations {
        display: flex;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-top: 30px;
        padding: 10px;
      }

      .card {
        background: #f0f0f0;
        border-radius: 10px;
        padding: 10px;
        cursor: pointer;
      }

      .card img {
        width: 100%;
        border-radius: 10px;
        margin-bottom: 10px;
      }

      .card-title {
        font-weight: bold;
        margin-bottom: 5px;
      }

      .card-rating {
        color: #e70f17;
        margin-bottom: 5px;
      }

      section {
        display: flex;
      }

      .recommendations img {
        width: 100%;
        height: 60%;
        border-radius: 20px;
      }


      .site-footer {
        color: #ffffff;
        font-family: sans-serif;
        width: 100%;
        height: 100%;
      }

      .site-footer .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
      }

      .footer-top {
        color: black;
        padding: 40px 20px;
        text-align: center;
      }

      .footer-top h2 {
        font-size: 24px;
        margin-bottom: 16px;
      }

      .footer-top p {
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 12px;
      }

      .read-more {
        display: inline-block;
        color: #e20074;
        font-weight: bold;
        text-decoration: none;
      }

      .footer-middle {
        background: url("Gambar/wave.svg") no-repeat center/cover;
      }
      .footer-middle .container {
        padding-top: 100px;
        color: #fff;
      }

      .footer-middle .flex {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
      }

      .footer-middle .col {
        flex: 1;
        min-width: 220px;
      }

      .footer-middle h3 {
        font-size: 16px;
        margin-bottom: 12px;
      }

      .footer-middle .info p {
        font-size: 14px;
        line-height: 1.5;
        margin-bottom: 16px;
      }

      .btn-download {
        display: inline-block;
        background: #00d3a9;
        color: #fff;
        padding: 12px 24px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
      }

      .footer-middle ul {
        list-style: none;
        padding: 0;
      }

      .footer-middle li {
        margin-bottom: 8px;
      }

      .footer-middle a {
        color: #fff;
        text-decoration: none;
        font-size: 14px;
      }

      .social-icons a {
        display: inline-block;
        margin-right: 12px;
      }

      .social-icons img {
        width: 24px;
        height: 24px;
      }

      .footer-bottom {
        background: rgb(47, 0, 100);
        color: white;
        padding-top: 15px;
        width: 100%;
        height: 50px;
      }

      .footer-bottom .flex {
        display: flex;
        align-items: center;
      }

      .space-between {
        justify-content: space-between;
      }

      .legal-links a {
        margin-left: 24px;
        color: #fff;
        font-size: 12px;
        text-decoration: none;
      }

      .submenu {
        display: none;
        position: absolute;
        top: calc(100% + 10px); 
        left: 0;
        background: white;
        min-width: 200px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        padding: 10px 0;
        z-index: 1000;
        opacity: 0;
        visibility: hidden;
      }

      .has-submenu:hover .submenu {
        display: block;
        opacity: 1;
        visibility: visible;
      }

      .has-submenu::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 20px;
        bottom: -20px;
        left: 0;
        background: transparent;
      }

      .submenu li {
        padding: 8px 15px;
        margin: 0;
        font-size: 14px;
        position: relative;
      }

      .menu-item i {
        transition: transform 0.1s ease;
      }

      .has-submenu:hover i {
        transform: rotate(180deg);
      }
    </style>
  </head>
  <body>
    <div class="top-nav">
      <div class="container-top">
        <ul class="left-menu">
          <li><a href="#" class="active">PERSONAL</a></li>
          <li><a href="#">ENTERPRISE</a></li>
          <li><a href="#">TENTANG KAMI</a></li>
        </ul>
        <ul class="right-menu">
          <li><a href="#">TSHOP</a></li>
          <li><a href="#">MYTELKOMSEL</a></li>
          <li class="lang-selector">
            <a href="#" class="active-lang"
              ><img src=Gambar/Indo.png alt="ID"> ID</a
            >
            <a href="#"><img src=Gambar/Eng.png alt="EN">EN</a>
          </li>
        </ul>
      </div>
    </div>

    <header class="main-header">
      <div class="container">
        <div class="logo">
          <img
            src="https://assets.telkomsel.com/public/logo-telkomsel.png "
            alt="Telkomsel Logo"
          />
        </div>
        <nav class="main-nav">
          <ul>
            <li class="menu-item has-submenu">
              <a href="#">
                <strong>IndiHome</strong> <i data-feather="chevron-down"></i>
              </a>
              <ul class="submenu">
                <li><a href="#">Paket Internet</a></li>
                <li><a href="#">TV Kabel</a></li>
                <li><a href="#">Telepon Rumah</a></li>
                <li><a href="#">Bundle</a></li>
              </ul>
            </li>
            <li class="menu-item has-submenu">
              <a href="#">
                <strong>Produk</strong> <i data-feather="chevron-down"></i
              ></a>
              <ul class="submenu">
                <li><a href="#">Paket Internet</a></li>
                <li><a href="#">Roaming</a></li>
                <li><a href="#">Hiburan</a></li>
                <li><a href="#">Unggulan</a></li>
              </ul>
            </li>
            <li class="menu-item has-submenu">
              <a href="#">
                <strong>Layanan Digital</strong>
                <i data-feather="chevron-down"></i
              ></a>
              <ul class="submenu">
                <li><a href="#">Paket Internet</a></li>
                <li><a href="#">Roaming</a></li>
                <li><a href="#">Hiburan</a></li>
                <li><a href="#">Unggulan</a></li>
              </ul>
            </li>
            <li class="menu-item has-submenu">
              <a href="#">
                <strong>Jelajah</strong> <i data-feather="chevron-down"></i
              ></a>
              <ul class="submenu">
                <li><a href="#">Paket Internet</a></li>
                <li><a href="#">Roaming</a></li>
                <li><a href="#">Hiburan</a></li>
                <li><a href="#">Unggulan</a></li>
              </ul>
            </li>
            <li class="menu-item has-submenu">
              <a href="#">
                <strong>Bantuan</strong> <i data-feather="chevron-down"></i
              ></a>
              <ul class="submenu">
                <li><a href="#">Paket Internet</a></li>
                <li><a href="#">Roaming</a></li>
                <li><a href="#">Hiburan</a></li>
                <li><a href="#">Unggulan</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <div class="actions">
          <button class="search-btn"><i data-feather="search"></i></button>
          <button class="sign-in-btn">Sign In</button>
        </div>
      </div>
    </header>

    <div class="main-container">
      <div class="sidebar">
        <h3>Produktivitas</h3>
        <ul>
          <li><a href="#">Alat</a></li>
          <li><a href="#">Alur Kerja & Perencanaan</a></li>
          <li><a href="#">Developer Tools</a></li>
          <li><a href="#">Komunikasi</a></li>
          <li><a href="#">Pendidikan</a></li>
        </ul>
        <hr />
        <h3>Gaya Hidup</h3>
        <ul>
          <li><a href="#">Belanja</a></li>
          <li><a href="#">Berita & Cuaca</a></li>
          <li><a href="#">Game</a></li>
          <li><a href="#">Hiburan</a></li>
          <li><a href="#">Jejaring Sosial</a></li>
          <li><a href="#">Kesehatan</a></li>
          <li><a href="#">Lelucon</a></li>
          <li><a href="#">Perjalanan</a></li>
          <li><a href="#">Rumah Tangga</a></li>
          <li><a href="#">Seni & Desain</a></li>
        </ul>
      </div>
      <div class="content-area">
        <h2>Ekstensi</h2>
        <div class="banner">
          <div>
            <h3>Favorit pada tahun 2024</h3>
            <p>Temukan ekstensi terbaik yang membuat tahun ini berwarna</p>
            <button>Lihat koleksi</button>
          </div>
          <img src="Gambar/bander.jpg" alt="Banner" />
        </div>

        <h2>I Gusti Adnan, mungkin Anda suka</h2>

        <section>
          <div class="recommendations">
            <?php
                require_once("admin/model/Koneksi.php");
                $koneksi = new Koneksi();
                $extensions = $koneksi->select('extensions'); foreach ($extensions as $row):
            ?>
            <button class="card">
              <img src="<?= $row['image'] ?>" alt="<?= $row['name'] ?>" />
              <div class="card-title"><?= $row['name'] ?></div>
              <div class="card-rating">
                <?= $row['rating'] ?>
                ★
              </div>
              <p><?= $row['description'] ?></p>
            </button>
            <?php endforeach; ?>
          </div>
        </section>
      </div>
    </div>

    <footer class="site-footer">
      <div class="footer-top">
        <div class="container">
          <h2>
            Nggak Perlu Bingung, Ini Cara Mudah Transfer dan bagi Pulsa AXIS
          </h2>
          <p>
            Fitur transfer pulsa barangkali menjadi salah satu fitur yang jarang
            kamu gunakan. Meski demikian, percayalah suatu saat kamu akan
            membutuhkannya. Untuk itu, kamu juga perlu tahu bagaimana cara mudah
            bagi dan transfer pulsa AXIS. AXIS yang selalu dinamis mengikuti
            perkembangan anak muda memberikan cara terbaik dan mudah untuk kamu
            ikuti. Untuk fitur bagi pulsa, berikut adalah pilihan cara yang bisa
            kamu lakukan.
          </p>
          <a href="#" class="read-more">BACA SELENGKAPNYA <span>⌄</span></a>
        </div>
      </div>

      <div class="footer-middle">
        <div class="container flex">
          <div class="col info">
            <h3>Cek &amp; Beli Kuota Data Internet</h3>
            <p>
              Kamu dapat melakukan pengecekan paket kuota internet AXIS kamu
              hingga beli paket kuota data internet di aplikasi AXISNet
            </p>
            <a href="#" class="btn-download">Download App</a>
          </div>
          <div class="col explore">
            <h3>Jelajahi</h3>
            <ul>
              <li><a href="#">AXISNet App</a></li>
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">XL Center</a></li>
              <li><a href="#">Cek NIK</a></li>
              <li><a href="#">Jaringan</a></li>
              <li><a href="#">Reaktivasi Kartu</a></li>
            </ul>
          </div>
          <div class="col social">
            <h3>Media Sosial</h3>
            <div class="social-icons">
              <a href="#" aria-label="Instagram"
                ><img src="Gambar/instagram.svg" alt="IG"
              /></a>
              <a href="#" aria-label="Twitter"
                ><img src="Gambar/twitter.svg" alt="TW"
              /></a>
              <a href="#" aria-label="Facebook"
                ><img src="Gambar/facebook.svg" alt="FB"
              /></a>
              <a href="#" aria-label="YouTube"
                ><img src="Gambar/youtube.svg" alt="YT"
              /></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div class="footer-bottom">
      <div class="container flex space-between">
        <span>Copyright © 2025 AXIS</span>
        <div class="legal-links">
          <a href="#">Kebijakan Privasi</a>
          <a href="#">Syarat &amp; Ketentuan</a>
        </div>
      </div>
    </div>

    <script>
      feather.replace();
    </script>
  </body>
</html>
