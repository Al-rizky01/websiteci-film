<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>"> <!-- Tambahkan CSS jika perlu -->
  <?= $this->include('partials/cssnavbar') ?>
  <?= $this->include('partials/allcss') ?>
  <style>
  .container {
    text-align: center;
    margin-top: 200px;
  }

  h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
  }

  h2 {
    color: aliceblue;
    font-size: 1.2rem;

    margin-bottom: 100px;
  }

  .bg-box {
    margin: 0 auto;
    height: 500px;
    max-width: 1200px;
    padding: 20px;
    background-image: url('<?= base_url("assets/FILMHUB.png") ?>');
    background-size: cover;
    background-position: center;
    border-radius: 15px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    color: white;
    font-size: 1.2rem;
    line-height: 1.5;
  }
  </style>
</head>





<body>
  <!-- Navbar -->
  <?= $this->include('partials/navbar') ?>

  <!-- Konten Home -->
  <div class="container">
    <h1>Selamat Datang Di FilmHub.</h1>
    <h2>Jelajahi koleksi film kami yang selalu terupdate dan populer setiap saat! Hanya di Filmhub.</h2>

    <!-- Kotak dengan background gambar -->
    <div class="bg-box">

    </div>
  </div>
</body>



</html>