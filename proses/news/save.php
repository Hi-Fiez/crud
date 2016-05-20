<?php
	include"../../conn.php";
	include"../../conf.php";
	$judul=post('judul');
	$isi=post('isi');
	$tanggal=date('Y-m-d H:i:s');
	$id_penulis=$_SESSION['id'];
	$s=$koneksi->prepare("insert into berita (`judul`,`isi`,`tanggal`,`id_penulis`) values ('".$judul."','".$isi."','".$tanggal."','".$id_penulis."')");
	$s->execute();
	header("location:../../index.php");
?>