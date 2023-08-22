<?php
include "../koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$nomor_hp = $_POST['nomor_hp'];
$semester = $_POST['semester'];
$ipk = $_POST['ipk'];
$pilihan_beasiswa = $_POST['pilihan_beasiswa'];
$berkas = $_FILES['berkas']['name'];
$berkas_tmp = $_FILES['berkas']['tmp_name'];
$upload_folder = "../uploads/";

$ipk_threshold = 3.0;
if ($ipk >= $ipk_threshold) {
  $can_apply = true;
  $status_ajuan = "Belum di verifikasi";
} /*else {
  $can_apply = false;
  $status_ajuan = "Tidak memenuhi syarat";
}*/

$query = "INSERT INTO registrations (nama, email, nomor_hp, semester, ipk, pilihan_beasiswa, berkas, status_ajuan) VALUES ('$nama', '$email', '$nomor_hp', '$semester', '$ipk', '$pilihan_beasiswa','$berkas', '$status_ajuan')";

if (move_uploaded_file($berkas_tmp, $upload_folder . $berkas) && mysqli_query($connection, $query)) {
  $message = "Data anda berhasil disimpan!";
} else {
  $message = "Error: " . $query . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

// Mengirimkan pesan sebagai parameter melalui URL
header("Location: ../pages/reg_beasiswa.php?message=" . urlencode($message));
exit;
?>