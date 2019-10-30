<?php 
	if(defined("IS_INDEX") == false) {
		die('anda harus login dulu');
	}
 ?>

<h3>Halaman Mahasiswa</h3>
<?php 
$mahasiswa = get_mahasiswa();
 ?>

	<table class="table table-bordered table-secondary text-center">
		<tr>
			<th>NO</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
			<?php $si=1 ?>
			<?php $rows = [];
					while($row = mysqli_fetch_assoc($mahasiswa)){
						$rows [] = $row;
					}
			?>

			<?php foreach ($rows as $row) : ?>
		<tr>
				<td><?= $si; ?></td>
				<td><?= $row["nim"]; ?></td>
				<td><?= $row["nama"]; ?></td>
				<td><?= $row["alamat"]; ?></td>
				<th><a href="index.php?page=ubah&nim=<?= $row['nim']; ?>&nama=<?= $row['nama']; ?>&alamat=<?= $row['alamat']; ?>">Ubah</a>||<a href="index.php?page=hapus&nim=<?= $row['nim']; ?>" onclick = "return confirm('anda yakin?');">Hapus</a></th>
			
			<?php $si++; ?>
		</tr>
			<?php endforeach ?>
	</table>
	<div class="row ml-1 mb-2">
		<a class="bg bg-warning px-2 rounded text-decoration-none" href="index.php?page=tambah">Tambah</a>
	</div>

