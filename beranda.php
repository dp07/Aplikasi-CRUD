<?php 
	if(defined("IS_INDEX") == false) {
		die('anda harus login dulu');
	}
 ?>

<h3><?= "Selamat Datang " . $_SESSION['username']; ?></h3>

