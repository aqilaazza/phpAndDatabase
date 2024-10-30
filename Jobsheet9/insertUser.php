<?php
// Membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "praktikumdb");

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk memasukkan data ke tabel user
$username = "admin";
$password = password_hash("123", PASSWORD_DEFAULT); // Hashing password untuk keamanan

$query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

// Menjalankan query
if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil dimasukkan ke tabel user";
} else {
    echo "Error memasukkan data: " . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>
