<?php 
ob_start();
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
mysqli_query($kon,"UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi' WHERE nim='$nim'")or die(mysqli_error($kon));
header("location:index.php?pesan=update");
?>