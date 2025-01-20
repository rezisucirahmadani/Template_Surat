<?php
$servername = "localhost"; // Nama server, biasanya localhost
$username = "root"; // Username MySQL
$password = ""; // Password MySQL (biasanya kosong di localhost)
$dbname = "user_auth"; // Nama database yang telah dibuat

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
