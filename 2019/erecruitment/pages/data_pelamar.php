<table border="1" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Posisi</th>
        <th>Tempat/Tanggal Lahir</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Foto</th>
        <th>Option</th>
    </tr>
<?php
    include("../library.php");
    $formulir = new formulir();
    $read = $formulir->readFormulir();
    $no = 0;
    while($data = $read->fetch(PDO::FETCH_OBJ)) {
    $no++;
?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data->nama; ?></td>
        <td><?php echo $data->posisi; ?></td>
        <td><?php echo $data->ttl; ?></td>
        <td><?php echo $data->email; ?></td>
        <td><?php echo $data->alamat; ?></td>
        <td><img src="../assets/upload/<?php echo $data->foto; ?>" width="150" height="150"></td>
        <td>
            <a href="dashboard.php?menu=edit&id=<?php echo $data->id; ?>"><button>EDIT</button></a>
            ||
            <a href="proses.php?action=delete&id=<?php echo $data->id; ?>"><button>DELETE</button></a>
        </td>
    </tr>
<?php } ?>
</table>