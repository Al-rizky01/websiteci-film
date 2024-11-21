<style>
nav {
  position: fixed;
  /* Tetap di atas halaman */
  top: 10px;
  /* Jarak dari atas */
  left: 50%;
  /* Letakkan di tengah horizontal */
  transform: translateX(-50%);
  /* Perbaiki posisi ke tengah */
  background: rgba(255, 255, 255, 0.4);
  /* Efek transparan */
  backdrop-filter: blur(1px);
  /* Efek blur untuk glassmorphism */
  border: 1px solid rgba(255, 255, 255, 0.3);
  /* Batas transparan */
  padding: 20px 50px;
  /* Ruang dalam */
  border-radius: 50px;
  /* Bentuk kapsul */
  display: flex;
  align-items: center;
  /* Rata tengah vertikal */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
  /* Bayangan halus */
  z-index: 1000;
  /* Pastikan di atas elemen lainnya */
}

nav ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  position: relative;
}

nav ul li {
  position: relative;
}

nav ul li a {
  text-decoration: none;
  font-weight: bold;
  padding: 10px 20px;
  color: black;
  transition: color 0.3s;
}

nav ul li a:hover {
  color: rgb(60, 61, 65);
  /* Warna teks saat dihover */
}



.nav-indicator {
  position: absolute;
  bottom: -8px;
  left: 0;
  height: 35px;
  width: 100px;
  background: rgba(43, 28, 28, 0.2);
  border-radius: 20px;
  transition: transform 0.4s cubic-bezier(0.25, 1, 0.5, 1), width 0.4s ease-in-out;
  z-index: -1;
  border: 1px solid rgba(35, 35, 35, 0.);
}



body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding-top: 70px;
  /* Tambahkan ruang untuk navbar */
  background: #f5f5f5;
}

h1 {
  text-align: center;
  color: #333;
}
</style>