<?php 
ob_start();
include 'koneksi.php';
$nim = $_GET['nim'];
mysqli_query($kon,"DELETE FROM mahasiswa WHERE nim='$nim'")or die(mysqli_error());
header("location:index.php?pesan=hapus");
?>