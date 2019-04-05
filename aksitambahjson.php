<?php 
ob_start();
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
//$query_mysql = mysqli_query("INSERT INTO mahasiswa SET('$nim','$nama','$prodi')");
//$query="INSERT INTO 'mahasiswa' VALUES('$nim','$nama','$prodi')";
//mysqli_query($kon, $query);
//header("location:index.php?pesan=input");
mysqli_query($kon,"INSERT INTO mahasiswa VALUES('$nim','$nama','$prodi')")or die(mysqli_error($kon));
//$nim = $_GET['nim'];
//mysqli_query($kon,"DELETE FROM mahasiswa WHERE nim='$nim'")or die(mysqli_error());
header("location:index.php?pesan=input");
?>