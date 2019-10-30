<?php 
	if(defined("IS_INDEX") == false) {
		die('anda harus login dulu');
	}


	// $nim = $_GET['nim'];

	// $data = ubah_mahasiswa($nim);

	if(isset($_POST['ubah'])){
		if (simpan_mahasiswa($_POST) > 0) {
			redirect_to("mahasiswa");
			exit;
		} else {
			redirect_to("mahasiswa");
			exit;
		}
	
	}
	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Ubah Mahasiswa</title>
 </head>
 <body>
 	<h3>Ubah Mahasiswa</h3>
 	<form action="index.php?page=ubah" method="post">
 		<table cellpadding="5">
 			<tr>
 				<td></td>
 				<td></td>
 				<td><input type="hidden" name="nim" value="<?= $_GET['nim']; ?>"></td>
 			</tr>
 			<tr>
 				<td>Nama</td>
 				<td>:</td>
 				<td><input type="text" name="nama" value="<?= $_GET['nama']; ?>"></td>
 			</tr>
 			<tr>
 				<td>Alamat</td>
 				<td>:</td>
 				<td><input type="text" name="alamat" value="<?= $_GET['alamat']; ?>"></td>
 			</tr>
 			<tr>
 				<td></td>
 				<td></td>
 				<td><button type="submit" name="ubah">ubah</button></td>
 			</tr>
 		</table>
 	</form>
 
 </body>
 </html>
