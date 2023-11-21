<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM mahasiswa WHERE id='$id'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data.";
}
