<?php 
	if(defined("IS_INDEX") == false) {
		die('anda harus login dulu');
	}


	$nim = $_GET['nim'];

	hapus_mahasiswa($nim);
	redirect_to("mahasiswa");
 ?>
