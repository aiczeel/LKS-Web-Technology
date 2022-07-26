<?php
include("../library.php");
$action = $_GET['action'];

    if($action == "create") {
        $nama = $_POST['nama'];
        $posisi = $_POST['posisi'];
        $ttl = $_POST['ttl'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $foto = $_FILES['foto']['tmp_name'];
        $nama_foto = $_FILES['foto']['name'];
        $directory = "../assets/upload/";
        $move = move_uploaded_file($foto, $directory.$nama_foto);

        if($move) {
            $formulir = new formulir();
            $formulir->insertFormulir($nama,$posisi,$ttl,$email,$alamat,$nama_foto);
            header("location:dashboard.php?menu=formulir");
        }
    }

    if($action == "edit") {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $posisi = $_POST['posisi'];
        $ttl = $_POST['ttl'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $foto_lama = $_POST['foto_lama'];
        $foto = $_FILES['foto']['tmp_name'];
        $nama_foto = $_FILES['foto']['name'];
        $directory = "../assets/upload/";
        $formulir = new formulir();

        if(empty($_FILES['foto']['tmp_name'])) {
            $formulir->updateFormulir($id,$nama,$posisi,$ttl,$email,$alamat,$foto_lama);
            header("location:dashboard.php?menu=data_pelamar");
        } else {
            move_uploaded_file($foto, $directory.$nama_foto);
            unlink("../assets/upload/".$foto_lama);
            $formulir->updateFormulir($id,$nama,$posisi,$ttl,$email,$alamat,$nama_foto);
            header("location:dashboard.php?menu=data_pelamar");
        }
    }

    if($action == "delete") {
        $formulir = new formulir();
        $formulir->deleteFormulir($_GET['id']);
        header("location:dashboard.php?menu=data_pelamar");
    }
?>