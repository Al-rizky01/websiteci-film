<!DOCTYPE html>
<html>

<>
  <title>Daftar Film</title>
  <style>
  /* Style umum */
  body {
    font-family: Arial, sans-serif;
    margin: 20px;
    background-color: #f5f5f5;
  }

  h1 {
    color: #333;
    text-align: center;
    margin-bottom: 30px;
  }

  /* Style untuk tombol tambah film */
  .btn-add {
    display: inline-block;
    padding: 10px 20px;
    background-color: #AF4C4CFF;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin-bottom: 20px;
    transition: background-color 0.3s;
  }

  .btn-add:hover {
    background-color: #1D1212FF;
  }

  /* Style untuk tabel */
  table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
  }

  th,
  td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #2A2425FF;
    color: white;
  }


  tr:hover {
    background-color: rgb(38, 42, 59);

  }

  tr {
    background-color: rgb(38, 42, 59);

  }

  /* Style untuk tombol aksi */
  .btn {
    display: inline-block;
    padding: 6px 12px;
    margin: 0 3px;
    text-decoration: none;
    border-radius: 3px;
    font-size: 14px;
    transition: background-color 0.3s;
  }

  .btn-detail {
    background-color: #2196F3;
    color: white;
  }

  .btn-edit {
    background-color: #FFC107;
    color: #000;
  }

  .btn-delete {
    background-color: #f44336;
    color: white;
    border: none;
    cursor: pointer;
  }

  .btn-detail:hover {
    background-color: #1976D2;
  }

  .btn-edit:hover {
    background-color: #FFA000;
  }

  .btn-delete:hover {
    background-color: #D32F2F;
  }
  </style>
  <?= $this->include('partials/cssnavbar') ?>
  <?= $this->include('partials/allcss') ?>
  <style>
  .container {
    margin: 50px;
    margin-top: 120px;
  }

  tbody {
    border-radius: 16px;
    -webkit-border-radius: 16px;
    -moz-border-radius: 16px;
    -ms-border-radius: 16px;
    -o-border-radius: 16px;
  }

  tr:hover {

    background-color: rgb(84, 86, 93);
  }

  tr {
    background-color: rgb(48, 51, 63);
  }

  h3 {
    color: aliceblue;
  }

  .btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: none;
    background-color: transparent;
    color: #333;
    font-size: 22px;
    margin: 0 5px;
    cursor: pointer;

  }



  .btn-detail i:hover {
    color: #17a2b8;
  }

  .btn-edit i:hover {
    color: #ffc107;
  }

  .btn-delete i:hover {
    color: #dc3545;
  }

  .clickable-row {
    cursor: pointer;
  }
  </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</>

<body>
  <?= $this->include('partials/navbar') ?>

  <div class="container">
    <h1>Daftar Film</h1>
    <a href="/film/create" class="btn-add">Tambah Film</a>
    <table>
      <tr>
        <th>No</th>
        <th>Cover</th>
        <th>Judul</th>
        <th>Sutradara</th>
        <th>Aksi</th>
      </tr>
      <tbody>
        <?php foreach ($films as $index => $film): ?>
        <tr class="clickable-row" data-href="/film/detail/<?= $film['id'] ?>">
          <td>
            <h3><?= $index + 1 ?></h3>
          </td>
          <td>
            <h3>
              <img src="<?= base_url('uploads/' . $film['cover']) ?>" alt="Cover" width="100">
            </h3>
          </td>
          <td>
            <h3><?= $film['judul'] ?></h3>
          </td>
          <td>
            <h3><?= $film['sutradara'] ?></h3>
          </td>
          <td>
            <!-- Tombol Detail -->
            <a href="/film/detail/<?= $film['id'] ?>" class="btn btn-detail" title="Detail">
              <i class="fas fa-info-circle"></i>
            </a>

            <!-- Tombol Edit -->
            <a href="/film/edit/<?= $film['id'] ?>" class="btn btn-edit" title="Edit">
              <i class="fas fa-edit"></i>
            </a>

            <!-- Tombol Hapus -->
            <form action="/film/delete/<?= $film['id'] ?>" method="post" style="display:inline;">
              <button type="submit" class="btn btn-delete" title="Hapus"
                onclick="return confirm('Apakah Anda yakin ingin menghapus film ini?')">
                <i class="fas fa-trash-alt"></i>
              </button>
            </form>
          </td>
        </tr>

        <?php endforeach; ?>
      </tbody>
    </table>

  </div>
  <script>
  document.addEventListener("DOMContentLoaded", function() {
    const rows = document.querySelectorAll(".clickable-row");

    rows.forEach(row => {
      row.addEventListener("click", function(event) {
        // Cegah navigasi jika tombol atau link di dalam baris diklik
        if (event.target.tagName === "A" || event.target.tagName === "BUTTON") {
          return;
        }

        // Navigasi ke halaman detail
        const href = this.dataset.href;
        if (href) {
          window.location.href = href;
        }
      });
    });
  });
  </script>

</body>

</html>