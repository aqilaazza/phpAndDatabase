<?php
// Membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "praktikumdb");

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk membuat tabel user
$query = "CREATE TABLE user (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

// Menjalankan query
if (mysqli_query($koneksi, $query)) {
    echo "Tabel user berhasil dibuat";
} else {
    echo "Error membuat tabel: " . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>
