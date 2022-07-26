<?php error_reporting(0); ?>
<form action="proses.php?action=create" method="post" enctype="multipart/form-data">
	<table border="1" cellspacing="0">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>
				<select name="kelas">
					<option value="X" <?php if ($kelas == "XII TKJ 1") ?>>X</option>
					<option value="XI" <?php if ($kelas == "XII MM 1") ?>>XI</option>
					<option value="XII" <?php if ($kelas == "XII MM 1") ?>>XII</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>
				<select name="jurusan">
					<option value="TKJ 1" <?php if ($jurusan == "TKJ 1") ?>>TKJ 1</option>
					<option value="TKJ 2" <?php if ($jurusan == "TKJ 2") ?>>TKJ 2</option>
					<option value="MM 1" <?php if ($jurusan == "MM 1") ?>>MM 1</option>
					<option value="MM 2" <?php if ($jurusan == "MM 2") ?>>MM 2</option>
					<option value="MM 3" <?php if ($jurusan == "MM 3") ?>>MM 3</option>
					<option value="OTKP 1" <?php if ($jurusan == "OTKP 1") ?>>OTKP 1</option>
					<option value="OTKP 2" <?php if ($jurusan == "OTKP 2") ?>>OTKP 2</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Foto</td>
			<td><input type="file" name="foto" required></td>
		</tr>
	</table>
	<input type="submit" value="Create">
	<a href="index.php"><input type="button" value="Cancel"></a>
</form>