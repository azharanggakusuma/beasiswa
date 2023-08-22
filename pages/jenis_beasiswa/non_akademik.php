<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Beasiswa - Akademik</title>

  <!-- Favicon -->
  <link rel="icon" href="../../img/favicon.ico">

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
  <link href="../../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/style.css">

  <style>
    input[type="text"],
    input[type="email"],
    input[type="number"],
    input[type="file"] {
      border-radius: 4px;
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
    <a href="../../index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <h2 class="m-0 text-primary"><i class="fa fa-graduation-cap me-3"></i>Beasiswa</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="../../index.php" class="nav-item nav-link">Home</a>
        <a href="../../index.php" class="nav-item nav-link">About Us</a>
        <div class="nav-item dropdown">
          <a href="#jenis_beasiswa" class="nav-item nav-link dropdown-toggle active" data-bs-toggle="dropdown">Jenis
            Beasiswa</a>
          <div class="dropdown-menu fade-down m-0">
            <a href="akademik.php" class="dropdown-item">Akademik</a>
            <a href="non_akademik.php" class="dropdown-item">Non Akademik</a>
            <a href="kip_kuliah.php" class="dropdown-item">KIP Kuliah</a>
            <a href="unggulan.php" class="dropdown-item">Unggulan</a>
          </div>
        </div>
        <a href="../reg_beasiswa.php" class="nav-item nav-link">Daftar</a>
        <a href="../hasil.php" class="nav-item nav-link">Hasil</a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Header Start -->
  <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <h1 class="display-6 text-white animated slideInDown">Jenis Beasiswa</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
              <li class="breadcrumb-item text-white">Jenis Beasiswa</li>
              <li class="breadcrumb-item text-white active" aria-current="page">Non Akademik</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->

  <!-- Beasiswa Start -->
  <section class="container-xxl py-5" id="about">
    <div class="container">
      <div class="row g-5">
        <div class="wow fadeInUp" data-wow-delay="0.3s">
          <h1 class="mb-4">Beasiswa Non Akademik</h1>
          <p class="mb-4">Beasiswa prestasi non-akademik diberikan kepada mahasiswa yang memiliki prestasi di bidang
            non-akademik, seperti olahraga, seni, budaya, sosial, atau keagamaan. Prestasi ini dapat mencakup medali
            Olimpiade, juara lomba robotika, pemenang festival film, atau kontribusi signifikan dalam aktivitas
            non-akademik lainnya.</p>
          <p class="mb-4"></p>
          <div class="row gy-2 gx-4 mb-4">
            <h4 class="mb-4">Syarat dan Ketentuan:</h4>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Mahasiswa harus memiliki prestasi yang
                mencakup bidang olahraga, seni, budaya, sosial, atau keagamaan.</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Beasiswa ini mencakup biaya pendidikan
                setiap semester, biaya buku, dan uang saku bulanan.</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Beasiswa prestasi non-akademik bersifat
                kompetitif dan selektif.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Beasiswa End -->

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
  <script src="../../lib/wow/wow.min.js"></script>
  <script src="../../lib/easing/easing.min.js"></script>
  <script src="../../lib/waypoints/waypoints.min.js"></script>
  <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="../../js/main.js"></script>

  <!-- Custom Javascript -->
  <script src="../../js/navbar.js"></script>

</body>

</html>