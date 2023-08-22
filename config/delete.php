<?php
include "../koneksi.php";

if (isset($_GET['id_beasiswa'])) {
  $sql_delete = "DELETE FROM beasiswa WHERE id_beasiswa = " . $_GET['id_beasiswa'];

  if (mysqli_query($connection, $sql_delete)) {
    // Penghapusan berhasil
    $response = "Beasiswa telah dihapus";
  } else {
    // Terjadi kesalahan saat menghapus
    $response = "Gagal menghapus beasiswa";
  }

  mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html>

  <!-- Favicon -->
  <link rel="icon" href="../img/favicon.ico">

<head>
  <style>
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