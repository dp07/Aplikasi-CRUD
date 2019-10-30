<?php 

	if(isset($_POST['tambah'])){
		if(tambah($_POST) > 0) {
			redirect_to("mahasiswa");
		}
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tambah Mahasiswa</title>
 	<style>

 	</style>
 </head>
 <body>
 	<h3>Tambah Mahasiswa</h3>
 	<form action="index.php?page=tambah" method="post">
 		<table cellpadding="5">
 			<tr>
 				<td>NIM</td>
 				<td>:</td>
 				<td><input type="text" name="nim"></td>
 			</tr>
 			<tr>
 				<td>Nama</td>
 				<td>:</td>
 				<td><input type="text" name="nama"></td>
 			</tr>
 			<tr>
 				<td>Alamat</td>
 				<td>:</td>
 				<td><input type="text" name="alamat"></td>
 			</tr>
 			<tr>
 				<td></td>
 				<td></td>
 				<td><button type="submit" name="tambah">Tambah</button></td>
 			</tr>
 		</table>

 	</form>
 
 </body>
 </html>