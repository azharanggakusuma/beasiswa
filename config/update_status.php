<?php
include "../koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $registration_id = $_POST['registration_id'];
  $new_status = $_POST['new_status'];

  // Lakukan koneksi ke database dan perbarui status sesuai data yang diterima
  $update_query = "UPDATE registrations SET status_ajuan='$new_status' WHERE id='$registration_id'";
  $update_result = mysqli_query($connection, $update_query);

  if (!$update_result) {
    echo "Error updating status: " . mysqli_error($connection);
  } else {
    header("Location: ../admin/index.php");
  }
}

mysqli_close($connection);
?>