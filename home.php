<h1>Welcome back, <?php echo $_SESSION['nama'];?></h1>
<hr>
<h1>News</h1>
<?php
	$s=$koneksi->prepare("select berita.*,user.nama from berita left join user on user.id=berita.id_penulis order by id desc");
	$s->execute();
	$data=$s->fetchAll();
	foreach($data as $key)
	{
		?>
		<div style="display: block; clear:both;border:1px solid orange;padding: 10px;">
			<div style="display: block; clear:both;"><?php echo$key['judul'];?>
				<div style="float:right;"><?php echo$key['tanggal'];?></div>
			</div>
			<hr>
			<div style="display: block; clear:both"><?php echo$key['isi'];?></div>
		<br>Posted by <?php echo$key['nama'];?>
		</div>
		<hr>
		<?php
	}
?>