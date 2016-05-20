<?php
include '../../conf.php';
include '../../conn.php';

$id = post('id');
$id_sekolah = post ('id_sekolah');
$nama_jurusan = post('nama_jurusan');
$ka_jurusan = post('ka_jurusan');

$simpan = $koneksi->prepare('UPDATE jurusan SET
id_sekolah ="'.$id_sekolah.'",nama_jurusan="'.$nama_jurusan.'",
ka_jurusan="'.$ka_jurusan.'"	
WHERE
id ="'.$id.'"');
$simpan->execute();
header("location:../../index.php?p=jurusan");
?>