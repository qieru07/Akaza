<?php session_start(); ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>GameTop — Top-up & Services</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- NAVBAR -->
  <header class="navbar">
    <div class="nav-inner">
      <div class="brand">
        <div class="brand-icon">
          <img src="asset/akazachibi.png" alt="Logo">
        </div>
        <div class="brand-text">
          <div class="brand-name">AKAZASTORE</div>
          <div class="brand-sub">Top-up & Services</div>
        </div>
      </div>

      <div class="search-wrap">
        <input id="search" type="search" placeholder="Cari Game atau Voucher..." />
      </div>

      <nav class="nav-links">
          <a href="#">Topup</a>
          <a href="riwayat.php">Cek Transaksi</a>
          <a href="#">Kalkulator</a>+

          <!-- Tambahin ID -->
          <?php if(isset($_SESSION['username'])): ?>
              <span class="auth">Halo, <?= $_SESSION['username']; ?></span>
              <a class="auth" href="auth/logout.php">Logout</a>
          <?php else: ?>
              <a class="auth" href="auth/login.php">Masuk</a>
              <a class="auth" href="auth/registrasi.php">Daftar</a>
          <?php endif; ?>
          <!-- Tempat muncul nama user -->
          <span id="userDisplay" class="user-display"></span>
        </nav>

  </header>

  <main>
    <!-- HERO -->
    <section class="hero">
      <div class="container">

    <!-- VIDEO BACKGROUND BOX -->
    <div class="video-card">
      <div class="video-title">AKAZA STORE</div>
      
    <video autoplay muted loop>
        <source src="asset/Akaza.mp4" type="video/mp4">
    </video>
    <!-- TEKS DALAM VIDEO -->
    <div class="video-text">
        <h3>AKAZASTORE Mobile Legend - Magic Chess</h3>
        <p>Open Setiap Hari</p>
    </div>

    <div class="live-tag">LIVE</div>
</div>

    </section>

    <!-- POPULAR -->
    <section class="section popular">
      <div class="section-header">
        <span class="fire">🔥</span>
        <h2>POPULER SEKARANG</h2>
      </div>

      <div class="product-grid" id="productGrid">
        <!-- card repeated -->
        <a href="topup/ml.php" class="prod-card">
          <img src="asset/Mobile Legend.jpg" alt="Mobile Legends" onerror="this.src='assets/placeholder-rect.png'"/>
          <div class="prod-body">
            <h3>Mobile Legends</h3>
            <p class="muted">Top-up diamond, voucher, dan paket promo resmi.</p>
          </div>
        </a>

        <a href="topup/ff.php" class="prod-card">
          <img src="asset/freefire.jpg" alt="Joki Rank" onerror="this.src='assets/placeholder-rect.png'"/>
          <div class="prod-body">
            <h3>Free Fire</h3>
            <p class="muted">Top-up diamond, voucher, dan paket promo resmi.</p>
          </div>
        </a>

        <a href="topup/item.php" class="prod-card">
          <img src="asset/Mobile Legend.jpg   " alt="Jasa Mabar" onerror="this.src='assets/placeholder-rect.png'"/>
          <div class="prod-body">
            <h3>Mobile Legends Item</h3>
            <p class="muted">Item-item spesial untuk Mobile Legends.</p>
          </div>
        </a>

        <a href="topup/pubg.php" class="prod-card">
          <img src="asset/pubg.jpeg" alt="Pubg Mobile" onerror="this.src='assets/placeholder-rect.png'"/>
          <div class="prod-body">
            <h3>Pubg Mobile</h3>
            <p class="muted">Top-up uc, voucher, dan paket promo resmi.</p>
          </div>
        </a>

        <a href="topup/roblox.html" class="prod-card">
          <img src="asset/Roblox.png" alt="Event" onerror="this.src='assets/placeholder-rect.png'"/>
          <div class="prod-body">
            <h3>Roblox Voucher</h3>
            <p class="muted">Paket Voucher Robux.</p>
          </div>
        </a>

        <a href="topup/shoyo.html" class="prod-card">
          <img src="asset/shoyo.png" alt="Gift" onerror="this.src='assets/placeholder-rect.png'"/>
          <div class="prod-body">
            <h3>Haikyu fly high </h3>
            <p class="muted">Topup Haikyu</p>
          </div>
        </a>
      </div>
    </section>
  </main>

  <!-- CUSTOMER SERVICE -->
  <button id="csBtn" class="cs-btn">CUSTOMER SERVICE</button>
<div id="userArea"></div>

<script>
</script>

  <script src="script.js"></script>
</body>
</html>
