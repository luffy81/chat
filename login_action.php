<?php
$valid=false;

$user = $_POST['username'];
$pass = $_POST['password'];

if(!empty($_POST['username']) && !empty($_POST['password'])){
	include "koneksi.php";
	
	$q="SELECT * FROM `tb_user` WHERE `username` ='$user' AND `password`='$pass'";
	$qx=mysqli_query($conn, $q);
	if(mysqli_num_rows($qx)>0){
		$valid=true;
		$user=mysqli_fetch_assoc($qx);
		session_start();
		$_SESSION['userid']=$user['id_admin'];
		$_SESSION['usernm']=$user['nama_admin'];
		// header('location:chat.php?pg=beranda');
		echo "<script>
			window.location='kontak.php';
			alert('Berhasil Login');
		</script>";
	}

}
if($valid==false){
	// header("location:index.php?msg=Username/Password Salah");
	echo "<script>
			window.location='index.php';
			alert('Gagal Login');
		</script>";
}
?>
