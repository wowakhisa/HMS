<?php
require_once 'config/config.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';

// Data contoh berita (bisa diganti dengan DB/RSS)

if (!isset($_SESSION['berita'])) {
    $_SESSION['berita'] = [
        
        [
            'judul' => 'Open Recruitment 5 Proker Besar',
            'isi' => 'Proklamasi, Simpedes, YCE, POSS, dan Civil DAY membuka kesempatan bagi anggota muda untuk bergabung menjalani kegiatan 5 proker besar.',
            'gambar' => 'https://via.placeholder.com/400x200?text=Produk+Baru',
            'link'  => '#'
        ],
        [
            'judul' => 'Kuliah Tamu',
            'isi' => 'Kuliah Tamu dengan tema “Pembangunan Konstruksi di Atas Tanah Problematik : Tanah Organik dan Gambut" yang diselenggarakan oleh Nafil Mahboby.',
            'gambar' => 'https://via.placeholder.com/400x200?text=Event+Teknologi',
            'link'  => '#'
        ],
        [
            'judul' => 'Pelatihan Software',
            'isi' => 'Pelatihan Software untuk meningkatkan keterampilan anggota dalam penggunaan perangkat lunak terbaru.Untuk tahun ini diadakan pelatihan software Revit optimalisasi Desain Arsitektur dan Struktur.',
            'gambar' => 'https://via.placeholder.com/400x200?text=Kerjasama',
            'link'  => '#'
        ],
        [
            'judul' => 'LKMM TD 2025',
            'isi' => 'LKMM TD 2025 diselenggarakan pada tanggal 3 Mei 2025 di Universitas Jember yang diikuti oleh mahasiswa Teknik Sipil angkatan 2023-202.',
            'gambar' => 'https://via.placeholder.com/400x200?text=Kerjasama',
            'link'  => '#'
        ],
        [
            'judul' => 'Podcast HMS',
            'isi' => 'Podcast HMS membahas berbagai topik menarik seputar dunia teknik sipil dan peran mahasiswa dalam industri konstruksi.Podcast ini menghadirkan narasumber dari alumni Angkatan 2018 bernama Muhammad Hawari Ikhwan.',
            'gambar' => 'https://via.placeholder.com/400x200?text=Kerjasama',
            'link'  => '#'
        ],
    ];
}

// Proses form tambah berita
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['judul'])) {
    $judul  = $_POST['judul'];
    $isi    = $_POST['isi'];
    $gambar = $_POST['gambar'];
    $link   = $_POST['link'];
    $berita_baru = [
        'judul' => $judul,
        'isi'   => $isi,
        'gambar'=> $gambar,
        'link'  => $link
    ];
    array_unshift($_SESSION['berita'], $berita_baru); // tambah ke awal array
}

$berita = $_SESSION['berita'];
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>HMS UNEJ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Website HMS UNEJ" name="keywords">
    <meta content="Website HMS UNEJ" name="description">    
    <meta name="google-site-verification" content="xE40FBv0GMj9UwFYysQ4tymj-lMxG5AJl_91umD96v4" />
    <link rel="icon" href="img/logo HMS.png" type="image/x-icon">

    <!-- Google Fonts, Bootstrap, Icons, Animate -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <style>
/* 🔄 Loading Screen */
.loading-screen {
  position: fixed;
  top: 0; left: 0; width: 100%; height: 100%;
  background: linear-gradient(45deg, #ffffff, #e2deff);
  display: flex; flex-direction: column; align-items: center; justify-content: center;
  z-index: 9999;
}
.loader {
  width: 100px;
  height: 100px;
  animation: spin 2s linear infinite;
}
@keyframes spin {
  0% { transform: rotateY(0deg) rotateX(0deg); }
  100% { transform: rotateY(360deg) rotateX(360deg); }
}
.loading-text {
  font-size: 1.2em;
  color: #333;
  margin-top: 20px;
}
.content {
  display: none;
}
    </style>
</head>
<body>
    <!-- Spinner -->
    <div class="loading-screen">
        <img src="img/logo HMS.png" alt="Loading" class="loader">
        <p class="loading-text">Loading...</p>
    </div>
    <!--Banner Carousel-->

<style>
/* Carousel Container dengan rasio 16:9 */
.carousel-container {
  position: relative;
  width: 100%;
  padding-top: 56.25%; /* 16:9 aspect ratio */
  overflow: hidden;
  border-radius: 8px;
}

/* Carousel Inner mengisi container */
.carousel-inner {
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  width: 100%;
  height: 100%;
}

/* Karena hanya 1 slide, cukup active saja */
.carousel-item {
  position: relative;
  width: 100%;
  height: 100%;
  opacity: 1;
}

/* Gambar stretch penuh dan crop proporsional */
.carousel-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* Caption overlay tengah */
.carousel-caption {
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background: rgba(0,0,0,0.4);
  text-align: center;
  padding: 20px;
  z-index: 2;
}

.carousel-caption h2 {
  color: #fff;
  font-size: 2rem;
  margin-bottom: 0.5rem;
  font-family: 'Helvatica', sans-serif;
}

.carousel-caption p {
  color: #fff;
  font-size: 1.1rem;
  margin: 0;
}

    </style>
    <!-- Main Content -->
    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-container">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/hmsupdate.png" alt="Banner 1" />
        <div class="carousel-caption">
          <h2 style="font-family: Helvetica, Arial, sans-serif;">HMS UPDATE</h2>
        </div>
      </div>
    </div>
  </div>
</div>


        <!-- Berita Grid -->
<style>
    /* 📰 Berita Grid */
.container-grid {
  max-width: 1200px;
  margin: 40px auto 20px;
  padding: 0 20px;
}
.grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 24px;
}
.card-berita {
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 6px 24px rgba(0,0,0,0.08);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform 0.28s, box-shadow 0.22s, filter 0.14s;
  opacity: 0;
  transform: translateY(32px) scale(1);
  animation: fadeUp 0.8s forwards;
  cursor: pointer;
}
.card-berita:hover,
.card-berita:focus-visible {
  transform: translateY(-8px) scale(1.06) rotateZ(-0.7deg);
  box-shadow: 0 24px 54px rgba(0, 80, 204, 0.16), 0 2px 12px rgba(0,0,0,0.08);
  filter: brightness(1.06) saturate(1.08);
}
.card-berita:active {
  transform: scale(0.95) translateY(2px);
  box-shadow: 0 4px 14px rgba(0, 80, 204, 0.11);
  filter: brightness(0.96);
}
.card-berita img {
  width: 100%;
  height: 170px;
  object-fit: cover;
  transition: transform 0.3s, filter 0.2s;
}
.card-berita:hover img,
.card-berita:focus-visible img {
  transform: scale(1.09);
  filter: brightness(1.09) contrast(1.11);
}
.card-berita:active img {
  transform: scale(0.98);
  filter: brightness(0.97);
}
.card-content {
  padding: 22px 18px 20px;
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.judul {
  color: #0066cc;
  font-size: 1.15em;
  font-weight: bold;
  margin-bottom: 10px;
  text-decoration: none;
}
.judul:hover {
  color: #003366;
}
.isi {
  color: #555;
  font-size: 0.98em;
  line-height: 1.45;
  margin: 0 0 18px;
}
.btn-link {
  align-self: flex-start;
  padding: 7px 17px;
  border-radius: 6px;
  background: linear-gradient(90deg, #09d8fa 0%, #1d62ef 100%);
  color: #fff;
  font-size: 0.98em;
  font-weight: 600;
  text-decoration: none;
  box-shadow: 0 2px 8px rgba(30, 144, 255, 0.08);
  transition: background 0.2s, box-shadow 0.2s;
}
.btn-link:hover {
  background: linear-gradient(90deg, #1d62ef 0%, #09d8fa 100%);
  box-shadow: 0 4px 16px rgba(30, 144, 255, 0.15);
}
@keyframes fadeUp {
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}
</style>

        <div class="container-grid">
  <h1 style="text-align:center; color:#000; font-family:Helvetica, sans-serif; font-weight:bold; font-size:2.5em; margin:40px 0 24px;">
    NEW UPDATE HMS
  </h1>

  <p style="font-family:Helvetica, sans-serif; color:#000; text-align:center; max-width:700px; margin:0 auto 36px auto;">
    Berisi berita, open recruitment, did you know, kabar angkatan, dan berbagai macam informasi mengenai Himpunan Mahasiswa Sipil.
  </p>
  <div class="grid">
    <?php foreach($berita as $i => $b): ?>
    <div class="card-berita" style="animation-delay: <?= 0.2 * $i ?>s;">
      <img src="<?= htmlspecialchars($b['gambar']) ?>" alt="<?= htmlspecialchars($b['judul']) ?>">
      <div class="card-content">
        <a class="judul" href="<?= htmlspecialchars($b['link']) ?>" target="_blank"><?= htmlspecialchars($b['judul']) ?></a>
        <div class="isi"><?= htmlspecialchars($b['isi']) ?></div>
        <a class="btn-link" href="<?= htmlspecialchars($b['link']) ?>" target="_blank">Baca Selengkapnya</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function() {
            setTimeout(() => {
                document.querySelector('.loading-screen').style.display = 'none';
                document.querySelector('.content').style.display = 'block';
            }, 1000);
        };
    </script>
</body>
</html>
<?php
require_once 'includes/footer.php';
?>

<!-- Tambahkan ini di dalam <head> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>
    body {
      margin: 0;
      padding: 0;
      min-height: 2000px;
      font-family: sans-serif;
    }

    .back-to-top, .whatsapp-btn {
      position: fixed;
      bottom: 20px;
      z-index: 1000;
      width: 50px;
      height: 50px;
      border: none;
      border-radius: 50%;
      font-size: 22px;
      cursor: pointer;
      transition: all 0.3s ease;
      display: none;
      align-items: center;
      justify-content: center;
    }

    .back-to-top {
      right: 80px;
      background-color: #38bdf8;
      color: white;
    }

    .whatsapp-btn {
      right: 20px;
      background-color: #25D366;
      color: white;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <!-- Tombol Scroll ke Atas -->
  <button class="back-to-top" title="Kembali ke atas">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- Tombol WhatsApp -->
  <a href="https://wa.me/62895411359867" target="_blank" class="whatsapp-btn" title="Hubungi via WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const backToTop = document.querySelector('.back-to-top');
      const whatsappBtn = document.querySelector('.whatsapp-btn');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 300) {
          backToTop.style.display = 'flex';
        } else {
          backToTop.style.display = 'none';
        }
        whatsappBtn.style.display = 'flex'; // WhatsApp selalu tampil
      });

      backToTop.addEventListener('click', function (e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    });
  </script>
</body>
</html>