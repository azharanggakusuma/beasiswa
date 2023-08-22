<?php
include "../koneksi.php";

session_start();
if (!isset($_SESSION["username"])) {
  header("Location: ../auth/login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beasiswa - Administrator</title>

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
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0 fixed">
    <a href="../index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <h2 class="m-0 text-primary"><i class="fa fa-graduation-cap me-3"></i>Beasiswa</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="index.php" class="nav-item nav-link">Dashboard</a>
        <a href="beasiswa.php" class="nav-item nav-link active">Beasiswa</a>
        <a href="../auth/logout.php" class="nav-item nav-link text-danger d-lg-none">Logout<i class="fa fa-arrow-right ms-3"></i></a>
      </div>
    </div>
    <a href="../auth/logout.php" class="btn btn-danger py-4 px-lg-4 d-none d-lg-block">Logout<i
        class="fa fa-arrow-right ms-3"></i></a>
  </nav>
  <!-- Navbar End -->

  <!-- Header Start -->
  <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <h1 class="display-6 text-white animated slideInDown">Ubah Beasiswa</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a class="text-white" href="index.php">Administrator</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Beasiswa</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->

  <!-- Table Start -->
  <div class="container mt-5">
    <div class="table-responsive">
      <div class="text-md-end">
        <a href="../config/add.php" class="btn btn-sm btn-primary">Tambah</a>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Beasiswa</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM beasiswa";
          $result = mysqli_query($connection, $query);
          $no = 1;

          if (!$result) {
            echo "Error: " . $query . "<br>" . mysqli_error($connection);
          } else {
            foreach ($result as $row) {
              ?>
              <tr>
                <td>
                  <?php echo $no++; ?>
                </td>
                <td>
                  <?php echo $row['nama_beasiswa']; ?>
                </td>
                <td>
                  <?php
                      $status = $row['status'];
                      $badgeClass = '';

                      if ($status === 'Buka') {
                        $badgeClass = 'badge rounded-pill bg-success';
                      } elseif ($status === 'Tutup') {
                        $badgeClass = 'badge rounded-pill bg-danger';
                      }
                      ?>
                  <span class="<?php echo $badgeClass; ?>"><?php echo $status; ?></span>
                </td>
                <td>
                  <a href='../config/edit.php?id_beasiswa=<?php echo $row['id_beasiswa']; ?>' class="btn btn-sm btn-warning edit-btn">&nbsp;&nbsp;Edit&nbsp;&nbsp;</a> &nbsp;
                  <a href='../config/delete.php?id_beasiswa=<?php echo $row['id_beasiswa']; ?>' class="btn btn-sm btn-danger delete-btn">Delete</a>
                </td>
              </tr>
              <?php
            }
          }
          mysqli_close($connection);
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- Table End -->

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