<?php
include "../koneksi.php";

if ($_POST) {
  $nama_beasiswa = $_POST['nama_beasiswa'];
  $status_beasiswa = "Buka";

  // Periksa apakah nama beasiswa sudah ada dalam database
  $query_check = "SELECT * FROM beasiswa WHERE nama_beasiswa = ?";
  $stmt_check = $connection->prepare($query_check);
  $stmt_check->bind_param("s", $nama_beasiswa);
  $stmt_check->execute();
  $result_check = $stmt_check->get_result();

  if ($result_check->num_rows > 0) {
    $response = "Nama beasiswa sudah ada dalam database.";
  } else {
    $tambah_data = "INSERT INTO beasiswa (nama_beasiswa, status) VALUES (?, ?)";

    $stmt = $connection->prepare($tambah_data);
    $stmt->bind_param("ss", $nama_beasiswa, $status_beasiswa);

    if ($stmt->execute()) {
      $response = "Data beasiswa telah ditambahkan";
    } else {
      $error_message = $stmt->error;
      $response = "Gagal menambahkan data beasiswa: $error_message";
    }

    $stmt->close();
  }

  $stmt_check->close();
}
?>

<!DOCTYPE html>
<html>
  <!-- Favicon -->
  <link rel="icon" href="../img/favicon.ico">

<head>
  <style>
    body {
      background-color: #eee;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    .loading-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      font-family: Arial, sans-serif;
    }

    .loading-icon {
      width: 50px;
      height: 50px;
      border: 4px solid rgba(0, 0, 0, 0.1);
      border-left-color: #007bff;
      border-radius: 50%;
      animation: spin 1s linear infinite;
    }

    .loading-text {
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <div class="loading-container">
    <div class="loading-icon"></div>
    <br>
    <div class="loading-text">
      <?php echo $response; ?><br><br>
    </div>
  </div>

  <script>
    // Redirect setelah 2 detik
    setTimeout(function () {
      window.location.href = '../admin/beasiswa.php';
    }, 2000);
  </script>
</body>

</html>