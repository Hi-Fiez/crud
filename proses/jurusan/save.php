<?php
	include'../../conn.php';
	include'../../conf.php';

	$id_sekolah = post('id_sekolah');
	$nama_jurusan = post('nama_jurusan');
	$ka_jurusan = post('ka_jurusan');

	$simpan = $koneksi->prepare('INSERT INTO jurusan
								(`id_sekolah`,`nama_jurusan`,`ka_jurusan`)
								VALUES
								("'.$id_sekolah.'","'.$nama_jurusan.'","'.$ka_jurusan.'")');
$simpan->execute();
header("location:../../index.php?p=jurusan");
?>