<?php
$host = "localhost:3307";
$username = "root";
$password = "";
$database = "praktikumdb";

// Menggunakan mysqli untuk koneksi
$connect = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil!";
}
?>