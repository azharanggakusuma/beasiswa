<?php
  include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir - Pendaftaran Beasiswa</title>

  <!-- Favicon -->
  <link rel="icon" href="../img/favicon.ico">

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
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">

  <style>
    input[type="text"],
    input[type="email"],
    input[type="number"],
    input[type="file"] {
      border-radius: 4px;
    }

    .btn-secondary[disabled] {
      background-color: #6c757d;
      color: #fff;
    }

    .btn-primary-custom {
      background-color: #06BBCC;
      color: #fff;
      border: none;
    }

    .btn-primary-custom:hover {
      background-color: #0056b3;
      color: #fff;
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
    <a href="../index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <h2 class="m-0 text-primary"><i class="fa fa-graduation-cap me-3"></i>Beasiswa</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="../index.php" class="nav-item nav-link">Home</a>
        <a href="../index.php" class="nav-item nav-link">About Us</a>
        <div class="nav-item dropdown">
          <a href="#jenis_beasiswa" class="nav-item nav-link dropdown-toggle"
            data-bs-toggle="dropdown">Jenis Beasiswa</a>
          <div class="dropdown-menu fade-down m-0">
            <a href="jenis_beasiswa/akademik.php" class="dropdown-item">Akademik</a>
            <a href="jenis_beasiswa/non_akademik.php" class="dropdown-item">Non Akademik</a>
            <a href="jenis_beasiswa/kip_kuliah.php" class="dropdown-item">KIP Kuliah</a>
            <a href="jenis_beasiswa/unggulan.php" class="dropdown-item">Unggulan</a>
          </div>
        </div>
        <a href="reg_beasiswa.php" class="nav-item nav-link active">Daftar</a>
        <a href="hasil.php" class="nav-item nav-link">Hasil</a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Header Start -->
  <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <h1 class="display-6 text-white animated slideInDown">Pendaftaran Beasiswa</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Daftar</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->

  <!-- Registration Form Start -->
  <div class="container py-5">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h3 class="mb-5">Isi Formulir dibawah ini!</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div id="messageContainer" class="mb-3">
          <?php
          // Mengecek apakah ada pesan yang dikirimkan melalui URL
          if (isset($_GET['message'])) {
            $message = $_GET['message'];
            echo '<div class="alert alert-success">' . $message . '</div>';
          }
          ?>
        </div>

        <script>
            // Fungsi untuk menghapus pesan setelah jangka waktu tertentu
            function removeMessageAndRedirect() {
                var messageContainer = document.getElementById("messageContainer");
                if (messageContainer) {
                    var messageElement = messageContainer.querySelector(".alert");
                    if (messageElement) {
                        setTimeout(function () {
                            messageElement.remove();
                            // Redirect ke hasil.php
                            window.location.href = "hasil.php";
                        }, 2000);
                    }
                }
            }

            // Panggil fungsi removeMessageAndRedirect setelah halaman dimuat
            window.onload = function () {
                removeMessageAndRedirect();
            };
        </script>

        <?php
        // Query untuk mengambil data pilihan beasiswa dari tabel
        $query = "SELECT * FROM beasiswa";
        $result = $connection->query($query);
        ?>

        <form action="../config/process_registration.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
          </div>

          <div class="mb-3">
            <label for="nomor_hp" class="form-label">Nomor HP</label>
            <input type="number" class="form-control" id="nomor_hp" name="nomor_hp" placeholder="Masukkan nomor hp"
              required>
          </div>

          <div class="mb-3">
            <label for="semester" class="form-label">Semester Saat Ini</label>
            <select class="form-select" id="semester" name="semester" style="border-radius: 4px;" required>
              <option value="" style="display: none;">Pilih Semester</option>
              <option value="1">Semester 1</option>
              <option value="2">Semester 2</option>
              <option value="3">Semester 3</option>
              <option value="4">Semester 4</option>
              <option value="5">Semester 5</option>
              <option value="6">Semester 6</option>
              <option value="7">Semester 7</option>
              <option value="8">Semester 8</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="ipk" class="form-label">IPK saat ini</label>
            <input type="text" class="form-control" id="ipk" name="ipk" value="" placeholder="Akan terisi otomatis"
              readonly>
          </div>

          <div class="mb-3">
            <label for="pilihan_beasiswa" class="form-label">Pilihan Beasiswa</label>
            <select class="form-select" name="pilihan_beasiswa" id="pilihan_beasiswa" style="border-radius: 4px;" disabled>
              <option value="" style="display: none;">Pilih Beasiswa</option>
              <?php
              $query = "SELECT * FROM beasiswa WHERE status = 'Buka'";
              $result = mysqli_query($connection, $query);
              
              if ($result) {
                while ($row = $result->fetch_assoc()) {
                  echo '<option value="' . $row['nama_beasiswa'] . '">' . $row['nama_beasiswa'] . '</option>';
                }
              }
              ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="berkas" class="form-label">Unggah Berkas Syarat</label>
            <input type="file" class="form-control" name="berkas" id="berkas" disabled>
          </div>

          <button type="submit" class="btn btn-primary-custom btn-secondary" style="border-radius: 4px;" id="daftarButton"
            disabled>Daftar</button>
          <a href="../index.php" class="btn btn-danger m-2" style="border-radius: 4px;">Kembali</a>
        </form>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const ipkPengguna = getIPKPenggunaDariDatabase("");
      const kolomIPK = document.getElementById("ipk");
      kolomIPK.value = ipkPengguna.toFixed(2);

      const pilihanBeasiswa = document.getElementById("pilihan_beasiswa");
      const berkasInput = document.getElementById("berkas");
      const daftarButton = document.getElementById("daftarButton");

      if (ipkPengguna < 3.00) {
        pilihanBeasiswa.disabled = true;
        berkasInput.disabled = true;
        daftarButton.disabled = true;
        daftarButton.classList.remove("btn-primary-custom");
      } else {
        pilihanBeasiswa.disabled = false;
        berkasInput.disabled = false;
        daftarButton.disabled = false;
        daftarButton.classList.add("btn-primary-custom");
        // Tambahkan atribut required pada input berkas jika IPK di atas 3
        berkasInput.required = true;
      }
    });

    document.getElementById("nomor_hp").addEventListener("input", function () {
      const nomorHPInput = this.value;

      // Hapus karakter selain angka
      const nomorHPCleaned = nomorHPInput.replace(/\D/g, '');

      // Batasi panjang maksimum menjadi 13 digit
      const nomorHPTrimmed = nomorHPCleaned.slice(0, 13);

      const daftarButton = document.getElementById("daftarButton");

      if (nomorHPTrimmed.length === 13) {
        //daftarButton.disabled = false;
      } else {
        //daftarButton.disabled = true;
      }

      this.value = nomorHPTrimmed;
    });

    function getIPKPenggunaDariDatabase(nama) {
      return Math.random() * 2 + 2;
    }

  </script>

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
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="../js/main.js"></script>

  <!-- Custom Javascript -->
  <script src="../js/navbar.js"></script>

</body>

</html>
