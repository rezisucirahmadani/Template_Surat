<?php
$host = 'localhost'; // Sesuaikan dengan host database Anda, misalnya 'localhost'
$user = 'root'; // Sesuaikan dengan username database Anda, misalnya 'root'
$password = ''; // Sesuaikan dengan password database Anda, misalnya ''
$database = 'template_surat'; // Nama database Anda, misalnya 'template_surat'

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
