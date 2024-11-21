<style>
/* Menghapus margin dan padding default */
body {
  margin: 0;
  padding: 0;
  overflow-x: hidden;
  /* Mencegah scroll bar muncul */
  background-color: rgb(38, 42, 59);
}

/* Video sebagai latar belakang */
#background-video {
  position: fixed;
  /* Tetap di tempat meski halaman digulir */
  top: 0;
  left: 0;
  width: 100vw;
  /* Lebar penuh layar */
  height: 100vh;
  /* Tinggi penuh layar */
  object-fit: cover;
  /* Menutupi area tanpa mengubah rasio aspek */
  z-index: -1;
  /* Di belakang konten lainnya */
}

/* Konten utama di atas video */
.content {
  position: relative;
  color: white;
  text-align: center;
  padding: 20px;
  font-family: Arial, sans-serif;
}


.container {
  margin-top: 100px;

}


h1 {
  color: white;
}
</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const nav = document.querySelector("nav ul");
  const links = document.querySelectorAll("nav ul li a");
  const indicator = document.querySelector(".nav-indicator");

  function setIndicatorPosition(link, animate = true) {
    const linkRect = link.getBoundingClientRect();
    const navRect = nav.getBoundingClientRect();

    // Update posisi dan ukuran indikator
    indicator.style.transform = `translateX(${linkRect.left - navRect.left}px)`;
    indicator.style.width = `${linkRect.width}px`;

    // Nonaktifkan transisi jika tidak ingin animasi awal
    if (!animate) {
      indicator.style.transition = "none";
      // Aktifkan transisi setelah posisi awal ditentukan
      setTimeout(() => {
        indicator.style.transition = "transform 0.4s cubic-bezier(0.25, 1, 0.5, 1), width 0.4s ease-in-out";
      }, 50);
    }
  }

  // Tentukan link aktif berdasarkan URL saat ini
  const currentPath = window.location.pathname;
  let activeLink = null;

  // Logika untuk menentukan halaman
  if (currentPath.includes("/film/detail")) {
    activeLink = document.querySelector('nav ul li a[href="/listfilm"]');
  } else {
    activeLink = document.querySelector(`nav ul li a[href="${currentPath}"]`);
  }

  // Pindahkan indikator ke link aktif saat halaman dimuat
  if (activeLink) {
    activeLink.classList.add("active");
    setIndicatorPosition(activeLink, false); // Tidak perlu animasi saat memuat halaman
  }

  // Tambahkan event listener untuk klik
  links.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault(); // Cegah navigasi default
      links.forEach((link) => link.classList.remove("active"));
      e.target.classList.add("active");
      setIndicatorPosition(e.target); // Pindahkan indikator dengan animasi

      // Redirect ke halaman setelah animasi selesai
      const target = e.target.getAttribute("href");
      setTimeout(() => (window.location.href = target), 400); // Delay redirect agar animasi terlihat
    });
  });
});
</script>