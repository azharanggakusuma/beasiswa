<?php
include "../koneksi.php";

// Inisialisasi pesan respons
$response = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil data dari form
  $id_beasiswa = $_POST['id_beasiswa'];
  $nama_beasiswa = $_POST['nama_beasiswa'];
  $status_beasiswa = $_POST['status'];

  // Update data ke database
  $sql_update = "UPDATE beasiswa SET nama_beasiswa=?, status=? WHERE id_beasiswa=?";

  $stmt = $connection->prepare($sql_update);
  $stmt->bind_param("ssi", $nama_beasiswa, $status_beasiswa, $id_beasiswa);

  if ($stmt->execute()) {
    $response = "Data beasiswa telah diperbarui";
  } else {
    $error_message = $stmt->error;
    $response = "Gagal memperbarui data beasiswa: $error_message";
  }

  $stmt->close();

}

$connection->close();
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