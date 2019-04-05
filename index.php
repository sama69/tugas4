<!DOCTYPE html>
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
		<h2>By : SAMA FATMAWATI</h2>
		
	
	</div>
	<hr>
	<br/>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	
	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Prodi</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($kon,"SELECT * FROM mahasiswa")or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nim']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['prodi']; ?></td>
			<td>
				<a href="edit.php?nim=<?php echo $data['nim']; ?>">Edit</a> |
				<a href="hapus.php?nim=<?php echo $data['nim']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
	<br>
	<a class="tombol" href="tambahjson.php">Tambah Data Baru</a>

</body>
</html>