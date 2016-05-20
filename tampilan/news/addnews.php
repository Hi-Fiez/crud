<h1>Buat Berita</h1>
<form method="POST" action="proses/news/save.php">
	<table>
		<tr>
			<td>Judul</td>
			<td><input type="text" name="judul"></input></td>
		</tr>
		<tr>
			<td colspan="2">Berita</td>
		</tr>
		<tr>
			<td colspan="2"><textarea rows="10" name="isi"></textarea></td>
		</tr>
		<tr>
			<td colspan="2"><button style="float:right;" type="submit">POST!</button></td>
		</tr>
	</table>
</form>