<?php
$currentURL = $_SERVER['REQUEST_URI']; // Ambil URL saat ini
?>

<nav>
  <ul>

    <li><a href="/" class="<?= ($currentURL == '/') ? 'active' : '' ?>">Home</a></li>
    <li><a href="/film" class="<?= ($currentURL == '/film') ? 'active' : '' ?>">List Film</a></li>

    <li><a href="/about" class="<?= ($currentURL == '/about') ? 'active' : '' ?>">About</a></li>
    <div class="nav-indicator">

    </div> <!-- Indikator dinamis -->
  </ul>
</nav>