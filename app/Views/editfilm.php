<!DOCTYPE html>
<html>

<head>
  <title>Edit Film</title>
  <style>
  /* Style umum */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f5f5f5;
    color: #333;
  }

  h1 {
    color: #333;
    text-align: center;
    margin-bottom: 30px;
  }

  /* Style untuk form */
  form {
    max-width: 600px;
    margin: 0 auto;
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  /* Style untuk form group */
  .form-group {
    margin-bottom: 20px;
  }

  /* Style untuk label */
  label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #444;
  }

  /* Style untuk input dan textarea */
  input[type="text"],
  textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    transition: border-color 0.3s;
    box-sizing: border-box;
  }

  textarea {
    height: 150px;
    resize: vertical;
  }

  input[type="text"]:focus,
  textarea:focus {
    outline: none;
    border-color: #4CAF50;
    box-shadow: 0 0 5px rgba(76, 175, 80, 0.2);
  }

  /* Style untuk button */
  .button-group {
    margin-top: 30px;
    text-align: center;
  }

  .btn {
    display: inline-block;
    padding: 12px 24px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .btn-update {
    background-color: #4CAF50;
    color: white;
  }

  .btn-cancel {
    background-color: #9e9e9e;
    color: white;
    text-decoration: none;
    margin-left: 10px;
  }

  .btn-update:hover {
    background-color: #45a049;
  }

  .btn-cancel:hover {
    background-color: #858585;
  }

  /* Style untuk error messages jika ada */
  .error-message {
    color: #f44336;
    font-size: 13px;
    margin-top: 5px;
  }
  </style>
</head>

<body>
  <h1>Edit Film</h1>
  <form action="<?= base_url('film/update/'.$film['id']) ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <div class="form-group">
      <label for="judul">Judul:</label>
      <input type="text" id="judul" name="judul" value="<?= $film['judul'] ?>" required>
    </div>

    <div class="form-group">
      <label for="sutradara">Sutradara:</label>
      <input type="text" id="sutradara" name="sutradara" value="<?= $film['sutradara'] ?>" required>
    </div>

    <div class="form-group">
      <label for="synopsis">Synopsis:</label>
      <textarea id="synopsis" name="synopsis" required><?= $film['synopsis'] ?></textarea>
    </div>

    <div class="form-group">
      <label for="cover">Cover:</label>
      <input type="file" id="cover" name="cover" accept="image/*" required>
      <br>
      <span class="helper-text">Unggah file gambar baru (format: jpg, png, gif). Jika tidak ada file baru, gambar lama
        akan tetap digunakan.</span>
    </div>



    <div class="button-group">
      <button type="submit" class="btn btn-update">Update Film</button>
      <a href="/film" class="btn btn-cancel">Batal</a>
    </div>
  </form>
</body>

</html>