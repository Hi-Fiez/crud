<h2>Tambah Jurusan</h2>
<form method="POST" action="proses/jurusan/save.php">
<table>
	<tr>
	<td>Sekolah</td>
	<td>
	<select name="id_sekolah">
	<?php
	$sekolah = $koneksi->prepare("SELECT *FROM sekolah");
	$sekolah->execute();
	$data = $sekolah->fetchAll();
	foreach ($data as $key) {
		?>
		<option value="<?php echo $key['id'];?>">
			<?php echo $key['nama'];?>

		</option>
		<?php
	}
	?>		
	</select>
	</td>
	</tr>
	<tr>
	<td>Nama Jurusan</td>
	<td><input name="nama_jurusan"/></td>
	</tr>
	<tr>
	<td>Kepala Jurusan</td>
	<td><input name="ka_jurusan"/></td>
	</tr>
	<tr>
	<td></td>
	<td><button type="submit">Simpan</button></td>
	</tr> 
</table>