<?php 
	function connect_to_db(){
		$conn= mysqli_connect("localhost", "root", "", "kuliah");

		if($conn == false){
			echo mysqli_connect_error();
			die();
		} else {
			return $conn;
		}
	}

	function select_db($sql){
		$conn = connect_to_db();
		return mysqli_query($conn, $sql);
	}

	function get_mahasiswa(){
		$sql = "SELECT * FROM kuliah";
		return select_db($sql);
	}

	function hapus_mahasiswa($nim){
		$sql = "DELETE FROM kuliah WHERE nim = '$nim'";
		return select_db($sql);
	}

	// function ubah_mahasiswa($nim){
	// 	$sql = "SELECT * FROM kuliah WHERE nim = '$nim'";
	// 	$result = select_db($sql);

	// 	$result2 = mysqli_fetch_assoc($result);

	// 	return $result2;
	// }

	function redirect_to($page){
		echo"<script>
			window.location = 'index.php?page=$page';
		</script>";
	}

	function tambah($data){
		$conn = connect_to_db();
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];

		$sql = "INSERT INTO kuliah VALUES ('$nim', '$nama', '$alamat')";

		$result = mysqli_query($conn,$sql);

		return mysqli_affected_rows($conn);
	}

	function simpan_mahasiswa($data){
		$conn = connect_to_db();
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];

		$sql = "UPDATE kuliah SET  nim = '$nim', nama = '$nama', alamat = '$alamat' WHERE nim = '$nim'";

		$result = mysqli_query($conn, $sql);

		return mysqli_affected_rows($conn);
	}


	function login($data){
		$conn = connect_to_db();
		$username = $_POST["username"];
		$password = $_POST["password"];
		$password = md5($password);


		// ambil data dari database
		$result = mysqli_query($conn,"SELECT * FROM pengguna where username = '$username'" );

		// tampung database dalam sebuah array
		$row = mysqli_fetch_assoc($result);

		// cek username dan password
		if($row["username"] == $username && $row["password"] == $password){
				return mysqli_num_rows($result);
		}
	}

	function loginAdmin($data){
		$conn = connect_to_db();
		$username = $_POST["username"];
		$password = $_POST["password"];
		//$password = md5($password);


		// ambil data dari database
		$result = mysqli_query($conn,"SELECT * FROM admin where username = '$username'" );

		// tampung database dalam sebuah array
		$row = mysqli_fetch_assoc($result);

		// cek username dan password
		if($row["username"] == $username && $row["password"] == $password){
				return mysqli_num_rows($result);
		}
	}


 ?>