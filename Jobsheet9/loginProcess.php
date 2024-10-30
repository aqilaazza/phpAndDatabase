<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM user WHERE username='$username' and password='$password'";
$result = mysqli_query($connect, $query);
$cek = mysqli_num_rows($result);

if ($cek > 0) {
    echo "Anda berhasil login. Silahkan menuju: <a href='homeAdmin.html'>Halaman HOME</a>";
} else {
    echo "Anda gagal login. Silahkan: <a href='loginForm.html'>Login kembali</a>";
    echo mysqli_error($connect);
}
?>