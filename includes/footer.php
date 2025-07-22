<?php


// Ensure the footer includes dynamic content if needed (e.g., date).
?>

<!-- Link ke file CSS yang ada di folder assets/css -->
<link href="assets/css/style.css" rel="stylesheet">

<!-- Link to Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<!-- Footer Start -->
<footer class="simple-footer bg-white text-dark py-4">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start gap-3">
      
      <!-- Logo -->
      <div class="footer-logo mb-2 mb-md-0">
        <img src="img/logo HMS.png" alt="Logo HMS" style="max-height: 35px;">
      </div>
  
      <!-- Teks Tengah -->
      <div class="footer-text mb-2 mb-md-0" style="font-size: 14px;">
        © 2025 Developed by <u>INFOKOM</u> — <strong>HMS UNEJ</strong>
      </div>
  
      <!-- Media Sosial -->
      <div class="footer-sosmed d-flex justify-content-center justify-content-md-end gap-2 flex-wrap">
        <a href="#" class="social-icon" title="Facebook">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="https://www.instagram.com/hms.unej/" class="social-icon" title="Instagram">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="" class="social-icon" title="Twitter / X">
          <i class="bi bi-twitter-x"></i>
        </a>
        <a href="https://open.spotify.com/show/2JQ8GaE4Gw9nxE4g7WSI3K" class="social-icon" title="Spotify">
          <i class="bi bi-spotify"></i>
        </a>
        <a href="https://www.youtube.com/@hmsunej7144" class="social-icon" title="YouTube">
          <i class="bi bi-youtube"></i>
        </a>
        <a href="https://hms-unej.ac.id" class="social-icon" title="Website">
          <i class="bi bi-globe"></i>
        </a>
      </div>
  
    </div>
  
    <!-- Style CSS Footer -->
    <style>
      .simple-footer {
        border-top: 1px solid #eeeeee;
      }
  
      .social-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        background-color: rgb(230, 230, 230);
        border-radius: 50%;
        color: rgb(0, 0, 0);
        font-size: 16px;
        transition: background 0.3s, transform 0.3s;
        text-decoration: none;
      }
  
      .social-icon:hover {
    background: linear-gradient(135deg, #00fffb, #2710f2);
    color: white;
    transform: scale(1.1);
}
  
      @media (max-width: 576px) {
        .footer-text {
          font-size: 12px;
        }
  
        .social-icon {
          width: 30px;
          height: 30px;
          font-size: 14px;
        }
      }
    </style>
  </footer>
  <!-- Footer End -->
