<?php
session_start();
include "../../koneksi.php";
error_reporting(0);	
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
	echo"<center>Untuk akses halaman ini anda harus login</center><br>";
	echo"<center><a href=../../index.php> Silahkan Login </center>";
}else{
	$modul=$_GET[modul];
	$act=$_GET[act];

	if ($act=='tambah'){
		$username =$_POST['username'];
		$password =md5($_POST['password']);
		$level =$_POST['level'];
		//echo $username,$password,$level;
		$sql=mysqli_query($koneksi,"Insert into admin (username, password, level)
			values ('$username', '$password', '$level')");
		header ('location:../../media.php?modul=user' );
		//$error =mysqli_error($sql);
		//echo $error;
	}else if ($act=='update'){
		$username =$_POST['username'];
		$password =md5($_POST['password']);
		$level =$_POST['level'];

		if(!empty($password)){

		//echo $username,$password,$level;
		$sql=mysqli_query($koneksi,"update admin set username='$username', 
			password = '$password', level = '$level'');
			values ('$username', '$password', '$level')");
		header ('location:../../media.php?modul=user' );
		//$error =mysqli_error($sql);
		//echo $error;	
		}else{		
		//echo $username,$password,$level;
		$sql=mysqli_query($koneksi,"update admin set username='$username', level = '$level'");
		header ('location:../../media.php?modul=user' );
		//$error =mysqli_error($sql);
		//echo $error;	
	}

	}
}
?>