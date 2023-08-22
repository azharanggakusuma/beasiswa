<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'pendaftaran_beasiswa';

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
  die("Koneksi ke database gagal: " . mysqli_connect_error());
}