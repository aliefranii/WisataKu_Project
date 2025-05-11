<?php
$servername = "localhost"; // Lokasi server MySQL, biasanya localhost
$username = "root"; // Username MySQL
$password = ""; // Password MySQL
$database = "parepare"; // Nama database yang ingin diakses

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
