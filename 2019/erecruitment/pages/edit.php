<?php
	include("../library.php");
	$formulir = new formulir();
	$id = $_GET['id'];
	extract($formulir->editFormulir($id));
?>
<form action="proses.php?action=edit" method="post" enctype="multipart/form-data">
<table border="1" cellspacing="0">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<input type="hidden" name="foto_lama" value="<?php echo $foto; ?>">
	<tr><td>Nama</td><td><input type="text" name="nama" value="<?php echo $nama; ?>"></td></tr>
    <tr><td>Posisi</td>
        <td>
            <select name="posisi">
                <option value="IT Support" <?php if($posisi == "IT Support") ?>>IT Support</option>
                <option value="Help Desk" <?php if($posisi == "Help Desk") ?>>Help Desk</option>
            </select>
        </td>
    </tr>   
    <tr><td>Tempat/Tanggal Lahir</td><td><input type="text" name="ttl" value="<?php echo $ttl; ?>"></td></tr>
    <tr><td>Email</td><td><input type="text" name="email" value="<?php echo $email; ?>"></td></tr>
    <tr><td>Alamat</td><td><textarea name="alamat"><?php echo $alamat; ?></textarea></td></tr>
	<tr>
		<td>Foto</td>
		<td>
			<img src="../assets/upload/<?php echo $foto; ?>" width="100" height="100"><br>
			<input type="file" name="foto">
		</td>
	</tr>
</table>
<input type="submit" value="Save">
<a href="dashboard.php?menu=data_pelamar"><input type="button" value="Cancel"></a>
</form>