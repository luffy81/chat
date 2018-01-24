<?php 
	include_once 'koneksi.php';

	$nama= $_POST['nama'];
	$username= $_POST['username'];
	$password= $_POST['password'];

	// insert to database
	mysqli_query($conn,"INSERT INTO `tb_user`(`nama`, `username`, `password`) VALUES ('$nama','$username','$password')");

	// redirect
	// header('Location: kontak.php');
	// exit;
	echo "<script>
			window.location='kontak.php';
			alert('Berhasil Daftar');
		</script>";
?>
