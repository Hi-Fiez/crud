<?php
	session_start();
	if(!isset($_SESSION['logged_in']))
	{
		header("location:login.php");
	}
	else
	{
		if(empty($_SESSION['logged_in']) or $_SESSION['logged_in']==false)
		{
			header("location:login.php");
		}
	}
	require_once'assets/dompdf-master/autoload.inc.php';
	date_default_timezone_set("Asia/Jakarta");
	function get($val)
	{
		return isset($_GET[$val])?htmlspecialchars($_GET[$val]):null;
	}
	function post($val)
	{
		return isset($_POST[$val])?htmlspecialchars($_POST[$val]):null;
	}
	function inc($val)
	{
		global $koneksi;
		include file_exists($val.'.php')?$val.'.php':'nofile.php';
	}
?>