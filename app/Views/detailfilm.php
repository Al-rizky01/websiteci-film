<!DOCTYPE html>
<html>

<sty>
  <title>Detail Film</title>
  <style>
  /* Style umum */
  body {
    font-family: Arial, sans-serif;
    margin: 20px;
    background-color: #f5f5f5;
    color: #333;
  }

  h1 {
    color: #333;
    text-align: center;
    margin-bottom: 30px;
  }

  /* Style untuk tabel detail */
  table {
    width: 100%;
    max-width: 800px;
    margin: 0 auto 20px;
    border-collapse: collapse;
    background-color: white;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
  }

  th,
  td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    width: 150px;
    background-color: #322C2CFF;
    color: white;
  }

  td {
    background-color: white;
  }

  /* Style untuk gambar cover */
  img {
    max-width: 200px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  }

  /* Container untuk tombol-tombol */
  .button-container {
    text-align: center;
    margin: 20px 0;
  }

  /* Style untuk tombol */
  .btn {
    display: inline-block;
    padding: 10px 20px;
    margin: 0 10px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
    cursor: pointer;
    border: none;
    font-size: 14px;
  }

  .btn-edit {
    background-color: #FFC107;
    color: #000;
  }

  .btn-delete {
    background-color: #f44336;
    color: white;
  }

  .btn-back {
    background-color: #607D8B;
    color: white;
  }

  .btn-edit:hover {
    background-color: #FFA000;
  }

  .btn-delete:hover {
    background-color: #D32F2F;
  }

  .btn-back:hover {
    background-color: #455A64;
  }

  /* Style untuk synopsis */
  .synopsis {
    line-height: 1.6;
    text-align: justify;
  }

  /* Style untuk timestamp */
  .timestamp {
    color: #666;
    font-size: 0.9em;
  }
  </style>
  <?= $this->include('partials/cssnavbar') ?>
  <?= $this->include('partials/allcss') ?>
  <style>
  .container {
    margin-top: 20px;
    margin-bottom: 40px;
  }

  .header-detail {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 20px;
    margin-left: 320px;
  }


  .icon-back {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-right: 280px;
    transition: background-color 0.3s ease, transform 0.2s ease;
    text-decoration: none;
    color: rgba(246, 243, 243, 0.579);
  }

  .icon-action {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    transition: background-color 0.3s ease, transform 0.2s ease;
    text-decoration: none;
    color: rgba(246, 243, 243, 0.579);
  }

  .header-actions {
    margin-left: 180px;
  }

  .icon-action:hover,
  .icon-back:hover {

    transform: scale(1.1);
  }

  .icon-action svg,
  .icon-back svg {
    width: 60px;
    height: 60px;
  }

  .header-actions {
    display: flex;
    gap: 15px;
  }

  .film-detail-container {
    display: flex;
    gap: 20px;
    margin-top: 50px;
    margin-left: 500px;
  }

  .film-cover img {
    max-width: 200px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .film-info {
    flex: 1;
  }

  .film-info h2 {
    margin-bottom: 10px;
    color: white;
    font-size: 2.5rem;
  }

  .film-info p {
    margin: 5px 0;
    margin-top: 15px;
    color: white;
  }

  .film-info strong {
    font-weight: bold;
    color: white;
  }
  </style>
  </s>

  <body>

    <div class="container">
      <div class="header-detail">
        <a href="/film" class="icon-back">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="15 18 9 12 15 6"></polyline>
          </svg>
        </a>
        <h1>Detail Film</h1>
        <div class="header-actions">
          <a href="/film/edit/<?= $film['id']; ?>" class="icon-action">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 20h9"></path>
              <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4Z"></path>
            </svg>
          </a>
          <a href="/film/create" class="icon-action">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="12" y1="5" x2="12" y2="19"></line>
              <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
          </a>
        </div>
      </div>



      <div class="film-detail-container">
        <!-- Cover Film -->
        <div class="film-cover">
          <img src="<?= base_url('uploads/' . $film['cover']); ?>" alt="Cover Image">
        </div>

        <!-- Detail Film -->
        <div class="film-info">
          <h2><?= $film['judul']; ?></h2>
          <p><strong>Slug:</strong> <?= $film['slug']; ?></p>
          <p><strong>Sutradara:</strong> <?= $film['sutradara']; ?></p>
          <p><strong>Synopsis:</strong> <?= $film['synopsis']; ?></p>
          <p><strong>Created At:</strong> <?= $film['created_at']; ?></p>
          <p><strong>Updated At:</strong> <?= $film['updated_at']; ?></p>
        </div>
      </div>




    </div>
  </body>

</html>