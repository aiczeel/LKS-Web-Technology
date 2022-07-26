<table border="1" cellpadding="0">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Jurusan</td>
        <td>Foto</td>
        <td>Option</td>
    </tr>
    <?php
    include("library.php");
    $library = new library();
    $read = $library->readData();
    $no = 0;
    while ($data = $read->fetch(PDO::FETCH_OBJ)) {
        $no++;
    ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data->nama; ?></td>
            <td><?= $data->kelas; ?></td>
            <td><?= $data->jurusan; ?></td>
            <td><img src="assets/upload/<?= $data->foto; ?>" height="100" width="100"></td>
            <td>
                <a href="edit.php?id=<?= $data->id; ?>">EDIT</a>
                ||
                <a href="proses.php?action=delete&id=<?= $data->id; ?>">DELETE</a>
            </td>
        </tr>
    <?php } ?>
    <a href="create.php"><button>Create</button></a>
</table>