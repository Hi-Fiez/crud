<?php
$jurusan = $koneksi->prepare('SELECT jurusan.*,sekolah.nama 
								FROM jurusan
								LEFT JOIN sekolah ON sekolah.id=jurusan.id_sekolah');
$jurusan->execute();
$data = $jurusan->fetchAll();

$s = '';
if(get("a")!=""){ $s = " WHERE nama_jurusan LIKE '%".get('a')."%'"; }
$h = $koneksi->prepare("SELECT jurusan.*,sekolah.nama 
						FROM jurusan LEFT JOIN sekolah ON sekolah.id=jurusan.id_sekolah ".$s.
" ORDER BY id DESC");
$h->execute();
$d= $h->fetchAll();
?>
<a href="index.php?p=jurusan&m=add" class="btn pull-right">Tambah Baru</a>
<h1>Data Jurusan</h1>
<div style="clear:both;width:200px;margin-right:12px;"
class="pull-right">
<form action="index.php?p=jurusan&m=search">
<input autocomplete="off" type="hidden" name="p"
value="jurusan">
<input autocomplete="off" type="text" name="a"
placeHolder="search by name and enter"
value="<?php echo (get("a"));?>">
</form>
</div>
<div><?php echo get('a')!=""?"Hasil dari pencarian  '".(get('a'))."'":
"";?>
</div>
<div style="clear:both">&nbsp;</div>
<table class="data">
	<thead>
		<tr>
		<th>No</th>
		<th>Sekolah</th>
		<th>Nama Jurusan</th>
		<th>Kepala Jurusan</th>
		<th colspan="2">Action</th>
		</tr>

	</thead>
	<tbody>
		<?php
		$i = 1;
		foreach ($d as $key) {
		?>
		<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $key['nama'];?></td>
		<td><?php echo $key['nama_jurusan'];?></td>
		<td><?php echo $key['ka_jurusan'];?></td>
		
		<td><a href="index.php?p=jurusan&m=edit
					&id=<?php echo $key['id'];?>">Edit</a></td>
		<td><a href="proses/jurusan/hapus.php?
						id=<?php echo $key['id'];?>"
						onclick="return confirm('Anda Yakin Ingin menghapus jurusan ini <?php echo $key['nama_jurusan'];?>?')">Delete</a></td>Delete</a></td>
						</tr>
						<?php $i++;}
						?>
	</tbody>
</table>