<style>
.tb{
	box-shadow:4px 4px 4px #e1e1e1;
}
</style>
<h3>Form Katalog</h3><br>
	<table border="0" cellspacing="0" cellpadding="6" width="94%" class="tb">
	<form action="" method="post" enctype="multipart/form-data">
	<tr>
	<td>Jenis Undangan</td>
	<td><input type="text" name="jenis"></td><td>Upload Gambar</td><td><input type="file" name="gambar"></td>
	</tr>
	<tr>
	<td>
		Deskripsi</td><td><textarea rows="4" cols="22" name="deskripsi"></textarea></td>
		<td><input type="submit" name="simpan" value="simpan">
		<input type="submit" name="batal" value="batal"></td>
	</td>
	</tr>
	</form>
</table>
<?php
$jenis=$_POST['jenis'];
$deskripsi=$_POST['deskripsi'];
$nama_file=$_FILES['gambar']['name'];
$source=$_FILES['gambar']['tmp_name'];
$folder='./gambar/';
$simpan=$_POST['simpan'];
if($simpan)
{
	move_uploaded_file($source, $folder. $nama_file);
	mysql_query("insert into katalog(jenis, deskripsi, gambar)values('$jenis','$deskripsi','$nama_file')");
?>
   <script language="javascript">window.location='<?php echo "?menu=katalog" ?>';</script>
<?php
}
?>
<br>
<table border="1" cellspacing="0" cellpadding="4" cellspacing="0" cellpadding="4" width="94%">
<tr><th>Jenis Undangan</th><th>Deskripsi</th><th>Gambar</th><th>Aksi</th></tr>
<?php
$tampil=mysql_query("Select*from katalog");
while($r=mysql_fetch_array($tampil))
{
	echo"<tr>
			<td>$r[jenis]</td>
			<td>$r[deskripsi]</td>
			<th><img src='gambar/$r[gambar]' width='80' height='80'></th>
			<td><a href='?menu=$menu&edit=$r[id]'>Edit</a>| <a href='?menu=$menu&hapus=$r[id]'>Hapus</a></tr>";
}
if($hapus)
{
	include"form/hapuskatalog.php";
}
?>
</table>