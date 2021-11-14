<?php
include"koneksi.php";
$user=$_POST['username'];
$pass=$_POST['password'];

//echo $user,$pass;

$sql=mysqli_query($koneksi, "Select * from admin where username = '$user'
					and password = '$pass' ");

$cek=mysqli_num_rows($sql);

if ($cek >0){
	session_start();
	$_SESSION['username']=$user;
	$_SESSION['password']=$password;
	//echo "<center>Selamat Datang <b>$user</b> Anda Berhasil Login <br>";
	//echo "Silahkan <a href=logout.php>Logout</a></center>";
	header('location:media.php?modul=home');
}else{
	echo "<center>Username dan Password Anda Salah <br>";
	echo "silahkan <a href=index.php>Login</a> Kembali</center>";
}

?>
