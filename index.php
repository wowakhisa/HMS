<?php session_start(); ?>
<?php

// Make sure the paths are correct
require_once 'config/config.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>


<html lang="en"><head>
    <meta charset="utf-8">
    <title>HMS UNEJ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Website HMS UNEJ" name="keywords">
    <meta content="Website HMS UNEJ" name="description">    
    <meta name="google-site-verification" content="xE40FBv0GMj9UwFYysQ4tymj-lMxG5AJl_91umD96v4" />
    
    <!-- Favicon -->
    <link rel="icon" href="img/logo HMS.png" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&amp;family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <script>
    if (window.location.pathname.endsWith('.html')) {
        window.history.replaceState({}, document.title, window.location.pathname.replace('.html', ''));
    }
</script>

    <!-- Icon Font Stylesheet -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<!-- Pastikan Bootstrap CSS & JS sudah di-include -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Spinner Start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Spinning Loader</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #ffffff, #e2deff);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .loader {
            width: 100px;
            height: 100px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotateY(0deg) rotateX(0deg);
            }
            100% {
                transform: rotateY(360deg) rotateX(360deg);
            }
        }

        .loading-text {
            font-size: 1.2em;
            color: #333;
            margin-top: 20px;
        }

        .content {
            display: none;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Loading Screen -->
    <div class="loading-screen">
        <img src="img/logo HMS.png" alt="Loading" class="loader">
        <p class="loading-text">Loading...</p>
    </div>

    <script>
        window.onload = function() {
            // Simulate loading time if needed (e.g., for server processing)
            setTimeout(() => {
                document.querySelector('.loading-screen').style.display = 'none';
                document.querySelector('.content').style.display = 'block';
            }, 1000); // Adjust delay time here (in milliseconds)
        };
    </script>

</body>
</html>
<!-- Spinner End -->


<style>
/* Container aspect ratio 16:9 */
.carousel-container {
  position: relative;
  width: 100%;
  padding-top: 56.25%; /* 16:9 ratio */
  overflow: hidden;
  border-radius: 8px;
}

/* Inner carousel mengisi seluruh container */
.carousel-inner {
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  width: 100%;
  height: 100%;
}

/* Transisi geser slide */
.carousel-item {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  transform: translateX(100%);
  transition: transform 0.6s ease-in-out, opacity 0.6s ease-in-out;
  z-index: 0;
}

.carousel-item.active {
  position: relative;
  opacity: 1;
  transform: translateX(0);
  z-index: 1;
}

.carousel-item-next,
.carousel-item-prev {
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 0;
}

.carousel-item-next.carousel-item-start,
.carousel-item-prev.carousel-item-end {
  transform: translateX(0%);
  opacity: 1;
}

.carousel-item-next,
.carousel-item.active.carousel-item-end {
  transform: translateX(100%);
}

.carousel-item-prev,
.carousel-item.active.carousel-item-start {
  transform: translateX(-100%);
}

/* Gambar memenuhi area dan crop otomatis */
.carousel-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Overlay caption dan tombol */
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
  margin-bottom: 1rem;
  font-family: 'Arial Black', sans-serif;
}

.carousel-caption p {
  color: #fff;
  font-size: 1.2rem;
  margin-bottom: 1.5rem;
}

/* Tombol "Selengkapnya" dengan animasi saat hover */
.btn-selengkapnya {
  padding: 0.75rem 1.5rem;
  font-size: 1rem;
  border-radius: 4px;
  background: linear-gradient(270deg, rgb(0, 208, 255), rgb(0, 47, 255));
  background-size: 200% 200%;
  color: #fff;
  text-decoration: none;
  border: none;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  animation: gradientMove 5s ease infinite;
}

.btn-selengkapnya:hover {
  transform: scale(1.05);
  box-shadow: 0 0 15px rgba(0, 132, 255, 0.5);
}

/* Keyframes untuk gradient animation */
@keyframes gradientMove {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

</style>

<!-- Carousel -->
<div id="bannerCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
  <div class="carousel-container">
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="img/proklamasi2.png" alt="Banner 1" />
        <div class="carousel-caption">
          <h2 style="font-family: 'Helvetica', sans-serif;">PROKLAMASI</h2>
          <p style="font-family: 'Helvetica', sans-serif;">Proklamasi adalah program pengenalan jurusan teknik sipil kepada mahasiswa baru...</p>
          <a href="proklamasi.html" class="btn btn-selengkapnya">Selengkapnya</a>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="img/simpedes.png" alt="Banner 2" />
        <div class="carousel-caption">
          <h2 style="font-family: 'Helvetica', sans-serif;">SIMPEDES</h2>
          <p style="font-family: 'Helvetica', sans-serif;">Simpedes adalah kegiatan pengabdian mahasiswa kepada masyarakat...</p>
          <a href="simpedes.html" class="btn btn-selengkapnya">Selengkapnya</a>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="carousel-item">
        <img src="img/civilday.png" alt="Banner 3" />
        <div class="carousel-caption">
          <h2 style="font-family: 'Helvetica', sans-serif;">CIVIL DAY</h2>
          <p style="font-family: 'Helvetica', sans-serif;">Civil Day adalah acara ulang tahun teknik sipil yang berupa konser dan...</p>
          <a href="civilday.html" class="btn btn-selengkapnya">Selengkapnya</a>
        </div>
      </div>
      <!-- Slide 4 -->
      <div class="carousel-item">
        <img src="img/yce.png" alt="Banner 4" />
        <div class="carousel-caption">
          <h2 style="font-family: 'Helvetica', sans-serif;">YCE</h2>
          <p style="font-family: 'Helvetica', sans-serif;">YCE merupakan ajang perlombaan Teknik Sipil UNEJ yang dilaksanakan dalam 3 macam lomba...</p>
          <a href="yce.html" class="btn btn-selengkapnya">Selengkapnya</a>
        </div>
      </div>
      <!-- Slide 5 -->
      <div class="carousel-item">
        <img src="img/poss.png" alt="Banner 5" />
        <div class="carousel-caption">
          <h2 style="font-family: 'Helvetica', sans-serif;">POSS</h2>
          <p style="font-family: 'Helvetica', sans-serif;">POSS atau Pekan Olahraga Seni Sipil merupakan acara yang bertujuan untuk meningkatkan...</p>
          <a href="pos.html" class="btn btn-selengkapnya">Selengkapnya</a>
        </div>
      </div>
      <!-- Tambah slide lain sesuai data -->
    </div>
    <!-- Control prev -->
    <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev" aria-label="Sebelumnya">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <!-- Control next -->
    <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next" aria-label="Berikutnya">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>
</div>

<script>
  const carousel = document.querySelector('#bannerCarousel');
  const items = carousel.querySelectorAll('.carousel-item');

  carousel.addEventListener('slide.bs.carousel', function (e) {
    const fromItem = items[e.from];
    const toItem = items[e.to];
    const direction = e.direction;

    // Reset class dari slide sebelumnya
    fromItem.classList.remove('carousel-item-start', 'carousel-item-end');
    toItem.classList.remove('carousel-item-next', 'carousel-item-prev');

    if (direction === 'left') {
      fromItem.classList.add('carousel-item-start');
      toItem.classList.add('carousel-item-next');
    } else {
      fromItem.classList.add('carousel-item-end');
      toItem.classList.add('carousel-item-prev');
    }
  });
</script>

    <!-- Navbar & Carousel End -->



<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->

<style>
    /* Underline animation */
    .underline-hover {
        position: relative;
        display: inline-block;
        text-decoration: none;
        color: rgba(211, 211, 211, 0.5);
    }

    .underline-hover::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: rgba(211, 211, 211, 0.5);
        transform: scaleX(0);
        transform-origin: bottom right;
        transition: transform 0.3s ease-out;
    }

    .underline-hover:hover::after {
        transform: scaleX(1);
        transform-origin: bottom left;
    }
</style>

<!-- Facts Start -->    
<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">

            <!-- BUFFVELING -->
            <div class="col-lg-4 wow zoomIn box-link" data-wow-delay="0.1s" onclick="zoomIn(this, 'buffveling.php')">
                <div class="bg-primary shadow d-flex align-items-center justify-content-start p-4" style="height: 150px;">
                    <img src="img/buffveling.png" alt="Logo Buffveling" style="width: 5rem; height: 5rem; object-fit: contain;">
                    <div class="ps-3 text-start">
                        <div class="text-white mb-0" style="font-family: Helvetica, sans-serif; font-size: 22px; font-weight: bold;">
                            BUFFVELING
                        </div>
                        <h5 class="text-white" style="font-family: Helvetica, sans-serif; font-size: 16px; font-weight: normal;">
                            Penasaran dengan materi yang disajikan oleh Himpunan Mahasiswa Sipil?...
                        </h5>
                    </div>
                </div>
            </div>

            <!-- AKADEMIK -->
            <div class="col-lg-4 wow zoomIn box-link" data-wow-delay="0.3s" onclick="zoomIn(this, 'https://sarjana-sipil.teknik.unej.ac.id/kurikulum-program-studi/struktur-mata-kuliah-program-studi/')">
                <div class="bg-light shadow d-flex align-items-center justify-content-start p-4" style="height: 150px;">
                    <img src="img/logounej.png" alt="Logo Akademik" style="width: 5rem; height: 5rem; object-fit: contain;">
                    <div class="ps-3 text-start">
                        <h5 class="text-primary mb-0" style="font-family: Helvetica, sans-serif; font-size: 22px; font-weight: bold;">
                            AKADEMIK
                        </h5>
                        <h5 class="text-dark" style="font-family: Helvetica, sans-serif; font-size: 16px; font-weight: normal;">
                            Apa mata kuliah yang ditempuh mahasiswa teknik sipil UNEJ?
                        </h5>
                    </div>
                </div>
            </div>

            <!-- SISTER FOR SIPIL -->
            <div class="col-lg-4 wow zoomIn box-link" data-wow-delay="0.6s" onclick="zoomIn(this, 'prestasi.html')">
                <div class="bg-primary shadow d-flex align-items-center justify-content-start p-4" style="height: 150px;">
                    <img src="img/sister.png" alt="Logo Sister" style="width: 5rem; height: 5rem; object-fit: contain;">
                    <div class="ps-3 text-start">
                        <h5 class="text-white mb-0" style="font-family: Helvetica, sans-serif; font-size: 22px; font-weight: bold;">
                            Sister for Sipil?
                        </h5>
                        <h5 class="text-white" style="font-family: Helvetica, sans-serif; font-size: 16px; font-weight: normal;">
                            COMING SOON STILL ON PROGRESS!!!
                        </h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .box-link {
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
    }

    .box-link:hover {
        transform: scale(1.03);
    }

    .box-link:active {
        transform: scale(1.05);
    }

    .stretched-link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        content: '';
    }

    .bg-primary {
        background: linear-gradient(135deg, #00fffb, #2710f2);
        color: white !important;
    }

    .bg-light {
        background: linear-gradient(135deg, #f8f9fa, #c9c9c9);
    }

    .text-primary {
        color: #007bff !important;
    }
</style>

<script>
    function zoomIn(element, link) {
        element.classList.add('active');
        setTimeout(() => {
            element.classList.remove('active');
            window.location.href = link;
        }, 300);
    }
</script>


<!-- Sejarah Start -->
<style>
    .sejarah-section {
        position: relative;
        overflow: hidden;
        background-image: url('img/gambar.png'); /* Ganti dengan path gambar Anda */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: #000000; /* Atur warna teks agar terlihat di atas background */
    }

    .sejarah-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0); /* Tambahkan overlay putih semi-transparan agar teks lebih mudah dibaca */
        z-index: -1;
    }

    .justify-text {
        text-align: justify;
    }

    .section-title h5,
    .section-title h1 {
        color: #000; /* Pastikan judul berwarna hitam */
    }

    /* Animasi Fade Up */
    .fade-up {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 1s, transform 1s;
    }

    .fade-up.active {
        opacity: 1;
        transform: translateY(0);
    }
</style>
<!-- Sejarah End -->

</head>
<body>
    
    <div class="container-fluid py-5 wow fadeInUp sejarah-section" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 style="text-align:center; color:#000; font-family:Helvetica, sans-serif; font-weight:bold; font-size:2.5em; margin:40px 0 20px;">
                VIDEO PROFIL</h1>
                    <h5 class="text-primary" style="text-align: justify; font-family:Helvetica, sans-serif; font-weight:normal;">Selamat datang di website resmi Himpunan Mahasiswa Sipil Universitas Jember! Mari bergabung dan berkontribusi bersama kami!</h5>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="ratio ratio-16x9 mb-4">
                        <iframe src="https://www.youtube.com/embed/7_Ok68-WzeE?si=C-C_7CriLN7kJm8B"
                                title="Video Profil Teknik Sipil UNEJ"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Sejarah End-->    
<!-- Blog Start -->

  <style>


    .container {
      padding: 40px 20px;
      max-width: 1000px;
      margin: auto;
      text-align: center;
    }



    .store-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      margin-top: 40px;
    }

    .product-card {
      background-color: white;
      color: #0c1b2a;
      border-radius: 12px;
      width: 300px;
      padding: 20px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      transition: transform 0.2s;
    }

    .product-card:hover {
      transform: scale(1.03);
    }

    .product-card img {
      width: 100%;
      height: 160px;
      object-fit: cover;
      border-radius: 6px;
      background-color: #e5e7eb;
      margin-bottom: 15px;
    }

    .product-name {
      font-weight: bold;
      font-size: 1.2em;
      margin-bottom: 10px;
    }

    .price {
      color: #0284c7;
      font-size: 1.1em;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .preorder-btn {
      background-color: #60a5fa;
      color: white;
      border: none;
      padding: 10px 20px;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.2s;
    }

    .preorder-btn:hover {
      background-color: #3b82f6;
    }

    @media (max-width: 768px) {
      .product-card {
        width: 90%;
      }
    }
  </style>
</head>
<body>

  <div class="container">
 <h1 style="text-align:center; color:#000; font-family:Helvetica, sans-serif; font-weight:bold; font-size:2.5em; margin:40px 0 20px;">
  CIVILIAN STORE
</h1>

<p style="font-family:Helvetica, sans-serif; color:#000; text-align:center; max-width:700px; margin:0 auto;">
  Dikelola langsung oleh Kewirausahaan Himpunan Mahasiswa Sipil Universitas Jember.<br>
  Civilian Store adalah usaha dari HMS sekaligus penyedia kebutuhan dari Anggota Tetap Mahasiswa Sipil.<br>
  Instagram: <a href="https://instagram.com/civilianstore" target="_blank" style="color:#007bff; text-decoration:underline;">@civilianstore</a>
</p>


    <div class="store-container">
      <!-- Produk 1 -->
      <div class="product-card">
        <img src="https://via.placeholder.com/300x160" alt="KEYCHAIN">
        <div class="product-name">KEYCHAIN</div>
        <div class="price">Rp10.000</div>
        <button class="preorder-btn">Pre–Order</button>
      </div>

      <!-- Produk 2 -->
      <div class="product-card">
        <img src="https://via.placeholder.com/300x160" alt="COVER TB">
        <div class="product-name">COVER TB</div>
        <div class="price">Rp8.000</div>
        <button class="preorder-btn">Pre–Order</button>
      </div>

      <!-- Produk 3 -->
      <div class="product-card">
        <img src="https://via.placeholder.com/300x160" alt="PDH SIPIL">
        <div class="product-name">PDH SIPIL</div>
        <div class="price">Rp150.000</div>
        <button class="preorder-btn">Pre–Order</button>
      </div>

      <!-- Produk 4 -->
      <div class="product-card">
        <img src="https://via.placeholder.com/300x160" alt="JAKET HIMPUNAN">
        <div class="product-name">JAKET HIMPUNAN</div>
        <div class="price">Rp200.000</div>
        <button class="preorder-btn">Pre–Order</button>
      </div>

      <!-- Produk 5 -->
      <div class="product-card">
        <img src="https://via.placeholder.com/300x160" alt="FULL PAKET BUKU BAJA LRFD+TABEL PROFIL">
        <div class="product-name">FULL PAKET BUKU BAJA LRFD+TABEL PROFIL</div>
        <div class="price">Rp60.000</div>
        <button class="preorder-btn">Pre–Order</button>
      </div>
    </div>
  </div>

</body>
</html>


<!--Masukan Start-->
<style>
    /* Style untuk background di seluruh bagian kontak */
    .contact-section {
        position: relative;
        overflow: hidden;
        background-image: url('img/sipilanjay.png'); /* Ganti dengan path gambar Anda */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding-top: 5rem; /* Sesuaikan dengan padding container */
        padding-bottom: 5rem; /* Sesuaikan dengan padding container */
        color: #ffffffb2; /* Atur warna teks agar terlihat di atas background */
    }

    .contact-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(180, 206, 255, 0.123); /* Tambahkan overlay gelap agar teks lebih mudah dibaca */
    }

    .contact-section > .container-fluid,
    .contact-section > .container {
        position: relative; /* Agar konten berada di atas overlay */
        z-index: 1;
    }

    .section-title h5,
    .section-title h1 {
        color: #fff; /* Pastikan judul tetap putih */
    }

    .form-with-background {
        background-image: url('img/form-bg.png'); /* Ganti dengan path gambar background form Anda */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 30px;
        border-radius: 10px;
        color: #333; /* Atur warna teks di dalam form */
    }

    .form-with-background form {
        background-color: transparent; /* Membuat background form transparan agar gambar terlihat */
    }

    .form-control {
        background: linear-gradient(135deg, #00fffb25, #2710f225) !important; /* Background semi-transparan untuk input */
        border: none !important;
    }

    .form-control::placeholder {
        color: #666; /* Warna placeholder */
    }

    .btn-primary {
        background: linear-gradient(135deg, #00fffb, #2710f2) !important;
        border: none !important; /* Hapus border agar tidak bertabrakan dengan gradient */
        color: #fff; /* Warna teks tombol */
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #00fffb, #2710f2) !important; /* Tetap sama saat hover */
        opacity: 0.9; /* Tambahkan sedikit efek redup saat hover (opsional) */
    }


.popup-container {
    display: none; /* Sembunyikan pop-up secara default */
    position: fixed; /* Agar tetap di tengah layar saat di-scroll */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Latar belakang semi-transparan */
    justify-content: center; /* Pusatkan secara horizontal */
    align-items: center; /* Pusatkan secara vertikal */
    z-index: 1000; /* Pastikan di atas elemen lain */
}

.popup-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    text-align: center;
    position: relative; /* Untuk memposisikan tombol close */
}

.popup-close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 1.5em;
    cursor: pointer;
    color: #333;
    border: none;
    background: none;
    padding: 0;
}
</style>
</head>
<body>
    <div class="container-fluid py-5 wow fadeInUp contact-section" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0" style="color: black; font-family: 'Helvetica', sans-serif;">KRITIK & SARAN</h1>
                <h5 class="text-primary" style="font-family: 'Helvetica', sans-serif;">Masukanmu membuat kita semakin berkembang, Bagikan sekarang!</h5>
            </div>
            <div class="row justify-content-center g-5">
                <div class="col-lg-6 wow slideInUp form-with-background" data-wow-delay="0.3s">
                    <form id="kritikSaranForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 px-4" id="nama" name="nama" placeholder="Nama" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control border-0 px-4" id="email" name="email" placeholder="Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 px-4 py-3" rows="4" id="masukan" name="masukan" placeholder="Masukan"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="popupContainer" class="popup-container">
        <div class="popup-content">
            <button id="popupCloseButton" class="popup-close">&times;</button>
            <h2 id="popupTitle"></h2>
            <p id="popupMessage"></p>
        </div>
    </div>

    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbz6T1PZwHzjXEdB2IMPX7hIYK2Qw9EwI1pflsOzp-7PLwfBRto9q_mb39aJeFD-1mKlIw/exec';
        const form = document.getElementById('kritikSaranForm');
        const popupContainer = document.getElementById('popupContainer');
        const popupTitle = document.getElementById('popupTitle');
        const popupMessage = document.getElementById('popupMessage');
        const popupCloseButton = document.getElementById('popupCloseButton');

        form.addEventListener('submit', e => {
            e.preventDefault();
            const formData = new FormData(form);

            fetch(scriptURL, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    return response.json();
                } else {
                    throw new Error('Gagal mengirim data.');
                }
            })
            .then(data => {
                console.log('Success!', data);
                form.reset(); // Reset formulir setelah berhasil
                showPopup('Berhasil!', 'Terima kasih atas masukan Anda!');
            })
            .catch(error => {
                console.error('Error!', error.message);
                showPopup('Gagal!', 'Terjadi kesalahan saat mengirim data.');
            });
        });

        // Fungsi untuk menampilkan pop-up
        function showPopup(title, message) {
            popupTitle.textContent = title;
            popupMessage.textContent = message;
            popupContainer.style.display = 'flex'; // Menggunakan flex agar konten di tengah
        }

        // Fungsi untuk menyembunyikan pop-up
        function hidePopup() {
            if (popupContainer) {
                popupContainer.style.display = 'none';
            }
        }

        // Menutup pop-up saat tombol tutup diklik
        if (popupCloseButton) {
            popupCloseButton.addEventListener('click', hidePopup);
        }

        // Menutup pop-up jika area di luar pop-up diklik
        if (popupContainer) {
            popupContainer.addEventListener('click', function(event) {
                if (event.target === popupContainer) {
                    hidePopup();
                }
            });
        }
    </script>
</body>
</html>
<!--Masukan End-->
 <!--Footer started-->
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
