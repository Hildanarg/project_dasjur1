<?php
//buat sambungin ke database
$servername = "localhost";
$username = "root";
$password = ""; // Kata sandi kosong karena Anda menggunakan kata sandi kosong.
$dbname = "reglog"; // Nama basis data

// Koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}



?>