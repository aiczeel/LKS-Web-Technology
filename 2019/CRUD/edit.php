<?php
include("library.php");
$library = new library();
$id = $_GET['id'];
extract($library->editData($id));
?>
<form action="proses.php?action=edit" method="post" enctype="multipart/form-data">
    <table border="1" cellspacing="0">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <input type="hidden" name="foto_lama" value="<?= $foto; ?>">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?= $nama; ?>"></td>
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
            <td>
                <img src="assets/upload/<?= $foto; ?>" width="100" height="100"><br>
                <input type="file" name="foto">
            </td>
        </tr>
    </table>
    <input type="submit" value="Save">
    <a href="index.php"><input type="button" value="Cancel" class="btn btn-"></a>
</form>