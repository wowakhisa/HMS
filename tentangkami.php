<?php
require_once 'config/config.php';
require_once 'includes/header.php'; // Pastikan header.php hanya berisi <head> dan buka <body>
require_once 'includes/navbar.php'; // Navbar dipisah agar modular
?>

<!-- 🔄 Spinner -->
<div class="loading-screen">
    <img src="img/logo HMS.png" alt="Loading" class="loader">
    <p class="loading-text">Loading...</p>
</div>

<!-- 🎞️ Banner Carousel -->
<div id="bannerCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
    <div class="carousel-container">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/tentangkami.png" alt="Banner 1" />
                <div class="carousel-caption">
                    <h2>Tentang Kami</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ✅ Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    window.addEventListener("load", () => {
        document.querySelector(".loading-screen").style.display = "none";
        document.querySelector(".content")?.classList.add("show");
    });
</script>

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

    .carousel-container {
        position: relative;
        width: 100%;
        padding-top: 56.25%; /* 16:9 aspect ratio */
        overflow: hidden;
        border-radius: 8px;
    }

    .carousel-inner {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        width: 100%;
        height: 100%;
    }

    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .carousel-caption {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: rgba(25, 125, 255, 0.22);
        text-align: center;
        padding: 20px;
        z-index: 2;
    }

    .carousel-caption h2 {
        color: #fff;
        font-size: 2rem;
        margin-bottom: 0.5rem;
        font-family: 'Arial Black', sans-serif;
    }

    .carousel-caption p {
        color: #fff;
        font-size: 1.1rem;
        margin: 0;
    }
</style>
<div class="container-grid">
  <h1 style="text-align:center; color:#000; font-family:Helvetica, sans-serif; font-weight:bold; font-size:2.5em; margin:40px 0 24px;">
    SIAPA KAMI?
  </h1>

  <p style="font-family:Helvetica, sans-serif; color:#000; text-align:center; max-width:700px; margin:0 auto 36px auto;">
    Berisi berita, open recruitment, did you know, kabar angkatan, dan berbagai macam informasi mengenai Himpunan Mahasiswa Sipil.
  </p>
<?php require_once 'includes/footer.php'; ?>
