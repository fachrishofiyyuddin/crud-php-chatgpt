<?php
$host = "localhost";
$user = "root"; // Ganti dengan username MySQL Anda
$pass = ""; // Ganti dengan password MySQL Anda
$db   = "crud-chatgpt"; // Ganti dengan nama database Anda

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
