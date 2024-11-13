<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami - MoneyMap</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background: #f0f4f8;
      color: #333;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: #4A90E2;
      color: white;
      text-align: center;
      padding: 50px 0;
    }

    .header h1 {
      margin: 0;
      font-size: 2.5em;
    }

    .container {
      width: 80%;
      margin: 0 auto;
      padding: 40px 0;
    }

    .profile {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 30px;
      margin-bottom: 40px;
    }

    .profile img {
      border-radius: 50%;
      width: 150px;
      height: 150px;
      object-fit: cover;
    }

    .profile-text {
      max-width: 600px;
    }

    .profile-text h2 {
      font-size: 2em;
      color: #4A90E2;
    }

    .profile-text p {
      font-size: 1.1em;
      line-height: 1.6;
      color: #555;
    }

    .social-links {
      margin-top: 20px;
    }

    .social-links a {
      text-decoration: none;
      font-size: 1.5em;
      color: #333;
      margin-right: 20px;
      transition: color 0.3s ease;
    }

    .social-links a:hover {
      color: #4A90E2;
    }

    .section-title {
      font-size: 2.2em;
      color: #4A90E2;
      text-align: center;
      margin-bottom: 20px;
    }

    .content {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }

    .content div {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin: 10px;
      width: 300px;
      text-align: center;
      transition: transform 0.3s ease;
    }

    .content div:hover {
      transform: translateY(-10px);
    }

    .content i {
      font-size: 3em;
      color: #4A90E2;
      margin-bottom: 10px;
    }

    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 15px 0;
      position: absolute;
      width: 100%;
      bottom: 0;
    }
  </style>
</head>
<body>
  <header class="header">
    <h1>Selamat Datang di MoneyMap!</h1>
    <p>Aplikasi Manajemen Keuangan Pribadi Anda</p>
  </header>

  <div class="container">
    <div class="profile">
      <img src="img/elycantik.jpg" alt="Profile Picture">
      <div class="profile-text">
        <h2>Halo, Saya Nailil Falahah:D </h2>
        <p>Saya adalah pengembang dari aplikasi MoneyMap, yang bertujuan untuk membantu Anda mengelola keuangan pribadi dengan lebih mudah dan efisien.</p>
        <div class="social-links">
          <a href="/https://www.facebook.com/azell.engs.1" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="/https://x.com/naill_flhh?s=08" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="#" target="_blank"><i class="fab fa-github"></i></a>
        </div>
      </div>
    </div>

    <h2 class="section-title">Kenapa MoneyMap?</h2>
    <div class="content">
      <div>
        <i class="fas fa-chart-line"></i>
        <h3>Analisis Keuangan</h3>
        <p>Melihat perkembangan keuangan Anda dalam bentuk grafik yang mudah dimengerti.</p>
      </div>
      <div>
        <i class="fas fa-wallet"></i>
        <h3>Pengelolaan Keuangan</h3>
        <p>Mengatur pemasukan dan pengeluaran Anda dengan sistem yang sederhana.</p>
      </div>
      <div>
        <i class="fas fa-cogs"></i>
        <h3>Fitur Customizable</h3>
        <p>Sesuaikan aplikasi sesuai dengan kebutuhan dan gaya hidup Anda.</p>
      </div>
    </div>
  </div>
</body>
</html>
