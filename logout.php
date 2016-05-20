<?php
	session_start();
	$_SESSION['logged_in']=false;
	$_SESSION['nama']='';
	$_SESSION['email']='';
	header('location:index.php');
?>