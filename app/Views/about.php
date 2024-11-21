<!DOCTYPE html>
<html lang="en">

<sty>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <style>
  .container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .container h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
  }

  .container p {
    font-size: 1.2rem;
    line-height: 1.6;
  }

  .container ul {
    list-style-type: disc;
    margin-left: 20px;
    padding-left: 20px;
  }

  .container ul li {
    font-size: 1.2rem;
    margin-bottom: 8px;
  }
  </style>
  <?= $this->include('partials/cssnavbar') ?>
  <?= $this->include('partials/allcss') ?>
  <style>
  h1 {
    color: black;
  }
  </style>


  <body>
    <?= $this->include('partials/navbar') ?>

    <div class="container">
      <h1>About Us</h1>
      <p>Selamat datang di website <b>Film Hub</b>, tempat di mana Anda dapat menemukan informasi menarik tentang
        berbagai
        film dari seluruh dunia.</p>
      <p>Kami bertujuan untuk menyediakan platform yang memungkinkan penggemar film menjelajahi koleksi film terbaru,
        memberikan ulasan, dan berbagi rekomendasi.</p>


      <h2>Hubungi Kami</h2>
      <p>Jika Anda memiliki pertanyaan atau saran, jangan ragu untuk menghubungi kami melalui email di <a
          href="mailto:info@filmhub.com">info@filmhub.com</a>.</p>
    </div>

  </body>

</html>