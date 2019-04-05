<html>
<head>
<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
</head>
<style>
body {
    background-color: rgba(70, 99, 71, 0.5) ;
}
</style>
<body>
<center>
    <div class="judul">				
		<h2>Tugas Web Service dengan REST</h2>
		<h2>By : Nabilla alya</h2>
	
	</div>
	<hr>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<?php
//if (isset ($_POST['nim'])) {
//$url = 'http://localhost:90//TUGAS4/jsonmhw.php';
//$data = "[{\"nim\":\".$_POST['nim'].\",\"nama\":\".$_POST['nama'].\",\"prodi\":\".$_POST['progdi'].\"}]";//
//$data="{\"nim\":\"".$_POST['nim']."\",\"nama\":\"".$_POST['nama']."\",\"prodi\":\"".$_POST['progdi']."\"}";
//echo "datanya ".$data;
//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_POST, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//$response = curl_exec($ch);
//echo "response ".$response;
//curl_close($ch);
//}
?>
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
<form method="POST" action="aksitambahjson.php">
<table>
<tr>
<td>NIM</td>
<td><input type="text" name="nim" id="nim"></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" id="nama"></td>
</tr>
<tr>
<td>Prodi</td>
<td><input type="text" name="prodi" id="prodi"></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="Tambah"></td>
<td></td>
</tr>
</table>
</form>
</body>
</html>