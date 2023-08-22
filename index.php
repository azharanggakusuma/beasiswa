<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Halaman Utama - Pendaftaran Beasiswa</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link rel="icon" href="img/favicon.ico">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <style>
    .owl-carousel .owl-nav [class*="owl-"] {
      border-radius: 50%;
    }
  </style>

</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <h2 class="m-0 text-primary"><i class="fa fa-graduation-cap me-3"></i>Beasiswa</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="#home" class="scroll-link nav-item nav-link active">Home</a>
        <a href="#about" class="scroll-link nav-item nav-link">About Us</a>
        <div class="nav-item dropdown">
          <a href="#jenis_beasiswa" class="scroll-link nav-item nav-link dropdown-toggle"
            data-bs-toggle="dropdown">Jenis Beasiswa</a>
          <div class="dropdown-menu fade-down m-0">
            <a href="pages/jenis_beasiswa/akademik.php" class="dropdown-item">Akademik</a>
            <a href="pages/jenis_beasiswa/non_akademik.php" class="dropdown-item">Non Akademik</a>
            <a href="pages/jenis_beasiswa/kip_kuliah.php" class="dropdown-item">KIP Kuliah</a>
            <a href="pages/jenis_beasiswa/unggulan.php" class="dropdown-item">Unggulan</a>
          </div>
        </div>
        <a href="pages/reg_beasiswa.php" class="nav-item nav-link">Daftar</a>
        <a href="pages/hasil.php" class="nav-item nav-link">Hasil</a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Carousel Start -->
  <section class="container-fluid p-0 mb-5" id="home">
    <div class="owl-carousel header-carousel position-relative">
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="img/carousel/graduation.jpg" alt="">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          style="background: rgba(24, 29, 56, .7);">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-sm-10 col-lg-8">
                <h5 class="text-light text-uppercase mb-3 animated slideInDown">Beasiswa</h5>
                <h1 class="display-3 text-white animated slideInDown">Akademik</h1>
                <p class="fs-5 text-white mb-4 pb-2">Beasiswa prestasi akademik diberikan kepada mahasiswa yang memiliki
                  prestasi di bidang akademik, seperti nilai IPK yang tinggi, sertifikat kompetensi, publikasi ilmiah,
                  atau penghargaan akademik lainnya.</p>
                <a href="pages/jenis_beasiswa/akademik.php" class="btn btn-light py-md-3 px-md-5 me-3 animated slideInLeft"
                  style="border-radius: 50px;">Detail</a>
                <a href="pages/reg_beasiswa.php" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight"
                  style="border-radius: 50px;">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="img/carousel/graduation.jpg" alt="">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          style="background: rgba(24, 29, 56, .7);">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-sm-10 col-lg-8">
                <h5 class="text-light text-uppercase mb-3 animated slideInDown">Beasiswa</h5>
                <h1 class="display-3 text-white animated slideInDown">Non Akademik</h1>
                <p class="fs-5 text-white mb-4 pb-2">Beasiswa prestasi non-akademik diberikan kepada mahasiswa yang
                  memiliki prestasi di bidang non-akademik, seperti olahraga, seni, budaya, sosial, atau keagamaan.
                  </p>
                <a href="pages/jenis_beasiswa/non_akademik.php" class="btn btn-light py-md-3 px-md-5 me-3 animated slideInLeft"
                  style="border-radius: 50px;">Detail</a>
                <a href="pages/reg_beasiswa.php" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight"
                  style="border-radius: 50px;">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="img/carousel/kipk.jpg" alt="">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          style="background: rgba(24, 29, 56, .7);">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-sm-10 col-lg-8">
                <h5 class="text-light text-uppercase mb-3 animated slideInDown">Beasiswa</h5>
                <h1 class="display-3 text-white animated slideInDown">KIP Kuliah</h1>
                <p class="fs-5 text-white mb-4 pb-2">KIP Kuliah adalah program bantuan biaya pendidikan bagi mahasiswa
                  dari keluarga tidak mampu yang berprestasi.</p>
                <a href="pages/jenis_beasiswa/kip_kuliah.php" class="btn btn-light py-md-3 px-md-5 me-3 animated slideInLeft"
                  style="border-radius: 50px;">Detail</a>
                <a href="pages/reg_beasiswa.php" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight"
                  style="border-radius: 50px;">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="img/carousel/unggulan.jpg" alt="">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          style="background: rgba(24, 29, 56, .7);">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-sm-10 col-lg-8">
                <h5 class="text-light text-uppercase mb-3 animated slideInDown">Beasiswa</h5>
                <h1 class="display-3 text-white animated slideInDown">Unggulan</h1>
                <p class="fs-5 text-white mb-4 pb-2">Beasiswa Unggulan adalah program bantuan biaya pendidikan bagi
                  mahasiswa yang berprestasi luar biasa di bidang akademik maupun non-akademik.</p>
                <a href="pages/jenis_beasiswa/unggulan.php" class="btn btn-light py-md-3 px-md-5 me-3 animated slideInLeft"
                  style="border-radius: 50px;">Detail</a>
                <a href="pages/reg_beasiswa.php" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight"
                  style="border-radius: 50px;">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Carousel End -->

  <!-- About Start -->
  <section class="container-xxl py-5" id="about">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100" src="img/beasiswa.jpg" alt=""
              style="object-fit: cover;">
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
          <h1 class="mb-4">Selamat Datang <i class="fas fa-user-graduate"></i></h1>
          <p class="mb-4">Kami adalah platform yang berkomitmen untuk memberikan informasi tentang berbagai jenis beasiswa dan menyediakan akses langsung ke platform pendaftaran. Tujuan kami adalah untuk membantu Anda menemukan peluang pendidikan yang sesuai dengan minat dan potensi Anda.</p>
          <p class="mb-4">Kami menyediakan informasi lengkap mengenai beasiswa akademik, non-akademik, KIP Kuliah, dan Beasiswa Unggulan. Selain itu, Anda dapat langsung mengakses platform pendaftaran melalui situs kami untuk mengajukan aplikasi beasiswa dengan mudah.</p>
          <p class="mb-4">Bergabunglah dengan kami dalam meraih impian pendidikan Anda dan jangan ragu untuk menghubungi kami jika Anda membutuhkan bantuan lebih lanjut.</p>
          <div class="row gy-2 gx-4 mb-4">
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Beasiswa Akademik</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Beasiswa Non Akademik</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Beasiswa KIP Kuliah</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Beasiswa Unggulan</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About End -->

  <!-- Beasiswa Start -->
  <section class="container-xxl py-5" id="jenis_beasiswa">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Jenis Beasiswa</h6>
        <h1 class="mb-5">Jenis Beasiswa</h1>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img width="560" height="315" src="img/beasiswa/akademik.jpeg"></i>
            </div>
            <div class="text-center p-4 pb-0">
              <h5 class="mb-4">Beasiswa Prestasi Akademik</h5>
            </div>
            <div class="d-flex border-top">
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>12
                September 2023</small>
              <small class="flex-fill text-center py-2"><i
                  class="fa fa-search-location text-primary me-2"></i>Indonesia</small>
            </div>
            <div class="text-center p-4 pb-0">
              <a href="pages/jenis_beasiswa/akademik.php" class="btn btn-primary mb-3" style="border-radius: 4px;">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img width="560" height="315" src="img/beasiswa/non-akademik.jpg"></img>
            </div>
            <div class="text-center p-4 pb-0">
              <h5 class="mb-4">Beasiswa Prestasi Non Akademik</h5>
            </div>
            <div class="d-flex border-top">
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>12
                September 2023</small>
              <small class="flex-fill text-center py-2"><i
                  class="fa fa-search-location text-primary me-2"></i>Indonesia</small>
            </div>
            <div class="text-center p-4 pb-0">
              <a href="pages/jenis_beasiswa/non_akademik.php" class="btn btn-primary mb-3" style="border-radius: 4px;">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img width="560" height="315" src="img/beasiswa/kipk.jpg"></img>
            </div>
            <div class="text-center p-4 pb-0">
              <h5 class="mb-4">Beasiswa KIP Kuliah</h5>
            </div>
            <div class="d-flex border-top">
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>30 Oktober
                2023</small>
              <small class="flex-fill text-center py-2"><i
                  class="fa fa-search-location text-primary me-2"></i>Indonesia</small>
            </div>
            <div class="text-center p-4 pb-0">
              <a href="pages/jenis_beasiswa/kip_kuliah.php" class="btn btn-primary mb-3" style="border-radius: 4px;">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img width="560" height="315" src="img/beasiswa/unggulan.jpg"></img>
            </div>
            <div class="text-center p-4 pb-0">
              <h5 class="mb-4">Beasiswa Unggulan</h5>
            </div>
            <div class="d-flex border-top">
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>30 Agustus
                2023</small>
              <small class="flex-fill text-center py-2"><i
                  class="fa fa-search-location text-primary me-2"></i>Indonesia</small>
            </div>
            <div class="text-center p-4 pb-0">
              <a href="pages/jenis_beasiswa/unggulan.php" class="btn btn-primary mb-3" style="border-radius: 4px;">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Beaswiswa End -->

  <!-- Footer Start -->
  <footer class="container-fluid bg-dark text-light pt-5 pb-3 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          <p>&copy; 2023 - Azharangga Kusuma. All rights reserved.</p>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#" class="text-light">Privacy Policy</a></li>
            <li class="list-inline-item"><a href="#" class="text-light">Terms of Use</a></li>
            <li class="list-inline-item"><a href="#" class="text-light">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="border-radius: 50%;"><i
      class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>

  <!-- Custom Javascript -->
  <script src="js/navbar.js"></script>
</body>

</html>