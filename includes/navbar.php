<?php
// Include necessary PHP code
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>HMS UNEJ</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Font & Icon -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
<link href="https://fonts.googleapis.com/css2?family=Coolvetica&display=swap" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

<!-- Custom CSS -->
<style>
:root {
  --primary: #06A3DA;
}
body {
  font-family: 'Helvetica', sans-serif;
  margin: 0;
  padding: 0;
}

/* Top bar full stretch dan melengkung */
#topBar {
  background-color: #007bff; /* Biru */
  display: flex;
  flex-direction: column; /* jadi kolom agar bisa taruh jam dan tombol di bawah */
  align-items: stretch;
  padding: 8px 20px;
  font-family: 'Helvetica', sans-serif;
  border-radius: 10px;
  width: 100%;
  box-shadow: 0 2px 6px rgba(0,0,0,0.2);
  margin: 10px 0;
}
#topContent {
  display: flex;
  justify-content: flex-end; /* posisi ke kanan */
  align-items: center;
  flex-wrap: wrap;
}
/* Container logo dan teks di kiri navbar */
#logoContainer {
  display: flex;
  align-items: center;
}
#logoContainer img {
  width: 60px;
  height: auto;
  margin-right: 10px;
}
#logoContainer .texts {
  display: flex;
  flex-direction: column;
}
#logoContainer h1 {
  margin: 0;
  font-size: 1.4em;
  color: #fff;
}
#logoContainer small {
  font-size: 0.8em;
  color: #fff;
}
/* Teks berganti dan jam di kanan */
/* Container untuk teks bergerak yang memenuhi lebar space yang tersisa */
#tickerWrapper {
  overflow: hidden;
  white-space: nowrap;
  width: 100%; /* atau sesuaikan sesuai layout */
  position: relative;
}

/* Teks bergerak dari kanan ke kiri */
#ticker {
  position: fixed; /* posisi tetap di pojok kiri atas */
  top: 0;
  left: 0;
  padding: 10px; /* jarak dari tepi atas dan kiri */
  font-family: 'Helvetica', sans-serif;
  color: #fff;
  font-size: 1em;
  opacity: 0; /* mulai dari transparan */
  animation: fade-in-out 4s ease-in-out infinite; /* durasi dan efek fade */
  background: rgba(0, 0, 0, 0); /* opsional, memberi latar belakang semi transparan */
}

/* Animasi fade in dan fade out */
@keyframes fade-in-out {
  0%, 100% { opacity: 0; }
  50% { opacity: 1; }
}

/* Jam di kanan */
#clock {
  min-width: 80px;
  font-weight: bold;
  color: #fff;
  text-align: right;
  font-family: 'Helvetica', sans-serif;
  margin-left: 10px; /* jarak dari teks */
}/* Tombol Arsip di bawah jam, di tengah */
#arsipBtn {
  margin-top: 8px;
  align-self: center;
  padding: 8px 16px;
  background: #fff;
  color: #007bff;
  border: 2px solid #007bff;
  border-radius: 4px;
  font-weight: 600;
  text-decoration: none;
  transition: background 0.3s, color 0.3s;
  font-family: 'Helvetica', sans-serif;
}
/* Hover efek tombol */
#arsipBtn:hover {
  background: #007bff;
  color: #fff;
}

</style>
</head>
<body>

<!-- Top bar, logo di kiri -->
<style>
  :root {
    --primary: #06A3DA;
  }
  body {
    font-family: 'Helvetica', sans-serif;
    margin: 0;
    padding: 0;
  }

  /* Topbar gradient biru dan melengkung */
  #topbar {
    background: linear-gradient(135deg, rgb(0, 132, 255), rgb(0, 47, 255));
    border-radius: 10px;
    padding: 10px 20px;
    margin: 10px 0;
  }
  /* Responsif: di HP, elemen di tengah dan jam di atas */
  @media(max-width: 767.98px){
    #topbar {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    #topContent {
      display: flex;
      width: 100%;
      justify-content: center;
      align-items: center;
    }
    #jamContainer {
      order: -1;
      width: 100%;
      display: flex;
      justify-content: center;
      padding-bottom: 8px;
    }
  }

  /* Styling tombol Arsip sebagai gradient putih lembut */
.arsipBtn {
  padding: 8px 16px;
  border-radius: 4px;
  font-weight: 600;
  text-decoration: none;
  display: inline-block;
  background: linear-gradient(135deg, #ffffff, #f0f0f0);
  color: #007bff;
  border: none;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  transition: background 0.3s, color 0.3s;
}

/* Hover efek untuk tombol */
.arsipBtn:hover {
  background: linear-gradient(135deg, #f9f9f9, #eaeaea);
  color: #0056b3;
}
</style>
<!-- Topbar berganti -->
<!-- Topbar -->
<div id="topbar" style="background-color:#006666; padding:10px 20px; color:#fff; font-family:Arial, sans-serif; font-size:14px; position:relative;">
  <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
    <!-- Kiri: Email -->
    <div class="d-flex align-items-center mb-2 mb-md-0">
      <i class="bi bi-envelope-fill me-2"></i>
      <a href="mailto:hms.unej@gmail.com" style="color:rgb(255, 255, 255); text-decoration: none;">hms.unej@gmail.com
</a>

    </div>
    <!-- Tengah: Teks berganti -->
    <div class="text-center mb-2 mb-md-0" style="flex:1; padding:0 10px;">
      <span id="postingText">Postingan Terbaru: </span>
    </div>
    <!-- Kanan: Tombol Arsip (dihide di HP) -->
    <div class="d-none d-md-block">
      <a href="#" class="arsipBtn">Arsip Akademik</a>
    </div>
  </div>
  <!-- Tombol Arsip di bawah saat mobile -->
  <div class="d-flex justify-content-center mt-2 d-md-none">
    <a href="#" class="arsipBtn">Arsip Akademik</a>
  </div>
</div>
<!-- Script untuk berganti teks -->
<script>
  const postings = [
    "Jangan lupa follow akun Instagram kami @hms.unej untuk update terbaru!",
    "Pengumuman Penting: Pendaftaran 5 Proker Besar telah dibuka!",
    "Jangan lewatkan Buffveling di website kami!",
    "Berita: Civilian Store resmi dibuka!",
    "Website ini dibuat oleh Informasi dan Komunikasi Himpunan Mahasiswa Sipil!!",
    "Ketua Himpunan : Muhammad Fauzan (221910301095)",
    "Hubungin kami melalui tombol WhatsApp di kanan bawah ini!",
  ];

  let indexPost = 0;
  const postingSpan = document.getElementById('postingText');

  function changePosting() {
    // Fade out
    postingSpan.style.opacity = 0;
    setTimeout(() => {
      // Ganti teks
      postingSpan.textContent = postings[indexPost];
      indexPost = (indexPost + 1) % postings.length;
      // Fade in
      postingSpan.style.opacity = 1;
    }, 300);
  }

  // Inisialisasi dan otomatis berganti setiap 5 detik
  changePosting();
  setInterval(changePosting, 5000);
</script>
<!-- Navbar -->
 <style>
    /* STYLE UMUM */
.nav-link {
  position: relative; /* Diperlukan untuk ::after positioning */
  color: #000;
  text-decoration: none;
  transition: all 0.3s ease;
  cursor: pointer;
}

.nav-link::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 2px;
  width: 0%;
  background-color: #007bff; /* Warna biru animasi */
  transition: width 0.3s ease;
}

.nav-link:hover::after {
  width: 100%;
}

.nav-link:hover {
  color: #007bff;
}

/* LINK AKTIF */
.nav-link.active {
  color: #007bff;
  text-decoration: underline;
  font-weight: bold;
}

/* COPYRIGHT STYLE */
.navbar-slide-copyright {
  padding: 15px 20px;
  text-align: center;
  font-size: 0.8em;
  color: #000; /* Ubah jadi hitam agar terbaca di background putih */
  background-color: transparent; /* Hapus background hitam */
  border-top: 1px solid rgba(0, 0, 0, 0.1); /* Garis pemisah atas */
  display: block;
}

.navbar-slide-copyright a {
  color: #000;
  text-decoration: none;
  font-weight: bold;
}

.navbar-slide-copyright a:hover {
  color: #555;
}

@media (min-width: 992px) {
  .navbar-slide-copyright {
    display: none;
  }
}

/* RESPONSIF MOBILE */
@media (max-width: 991.98px) {
  .navbar {
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1050;
    background: #fff;
  }

  .navbar-collapse {
    position: fixed;
    top: 0;
    right: -100%;
    width: 80%;
    height: 100vh;
    background: #000; /* Background untuk sidebar menu */
    transition: right 0.3s ease-in-out;
    z-index: 1049;
    padding-top: 60px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding-left: 20px;
  }

  .navbar-collapse.show {
    right: 0;
  }

  .navbar-nav {
    flex-direction: column;
    width: 100%;
  }

  .nav-link {
    padding: 15px 20px;
    width: 100%;
    text-align: left;
    color: #fff !important; /* Teks putih di mobile */
    cursor: pointer; /* Tambahkan pointer juga di mobile */
  }

  .nav-link.active {
    color: #00bfff !important;
    text-decoration: underline;
  }

  .navbar-toggler {
    z-index: 9999;
  }
}

  </style>
<div class="container-fluid p-0">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#fff;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php" style="display:flex; align-items:center;">
        <img src="img/logo HMS.png" alt="Logo" width="60" style="margin-right:10px;" />
        <div>
<h1 style="margin:0; font-family: 'Helvetica', sans-serif;">HMS UNEJ</h1>
<small style="font-family: 'Helvetica', sans-serif;">Himpunan Mahasiswa Sipil</small>
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="z-index:9999;">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Beranda</a></li>
          <li class="nav-item"><a href="beritasipil.php" class="nav-link">HMS Update</a></li>
          <li class="nav-item"><a href="tentangkami.php" class="nav-link">Tentang kami</a></li>
          <li class="nav-item"><a href="staffhms.php" class="nav-link">Staff</a></li>
          <li class="nav-item"><a href="buffveling.php" class="nav-link">Buffveling</a></li>
          <li class="nav-item"><a href="proker.php" class="nav-link">Proker</a></li>
        </ul>
                <div class="navbar-slide-copyright">
                    © 2025 Developed by <a href="#">INFOKOM</a> — <strong>HMS UNEJ</strong>
      </div>
    </div>
  </nav>
</div>

