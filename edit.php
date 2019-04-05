<<!DOCTYPE html>
<html>
<head>
<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
body {
    background-color: rgba(255, 99, 71, 0.5) ;
}
</style>
<body>
    <CENTER>
	<div class="judul">		
		<h2>Tugas Web Service dengan REST</h2>
		<h2>By : Nabilla alya</h2>
	
	</div>
	<hr>
	<br/>
	
	

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$nim = $_GET['nim'];
	$query_mysqli = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE nim='$nim'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>nim</td>
				<td>
					<input type="text" name="nim" value="<?php echo $data['nim'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>					
			</tr>	
			<tr>
				<td>prodi</td>
				<td><input type="text" name="prodi" value="<?php echo $data['prodi'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
	<a href="index.php">Lihat Semua Data</a>
</body>
</html>