<?php

class library
{

    public function __construct()
    {
        $this->con = new PDO("mysql:host=localhost;dbname=lks", "root", "");
    }

    public function createData($nama, $kelas, $jurusan, $foto)
    {
        $query = $this->con->prepare("INSERT INTO siswa (nama,kelas,jurusan,foto) VALUES ('$nama','$kelas','$jurusan','$foto')");
        $query->execute();
    }

    public function editData($id)
    {
        $query = $this->con->prepare("SELECT * FROM siswa WHERE id = :id");
        $query->execute(array(':id' => $id));
        $row = $query->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function updateData($id, $nama, $kelas, $jurusan, $foto)
    {
        $query = $this->con->prepare("UPDATE siswa SET nama = '$nama', kelas = '$kelas', jurusan = '$jurusan', foto = '$foto' WHERE id = '$id'");
        $query->execute();
    }

    public function readData()
    {
        $query = $this->con->prepare("SELECT * FROM siswa");
        $query->execute();
        return $query;
    }

    public function deleteData($id)
    {
        $query = $this->con->prepare("DELETE FROM siswa WHERE id = '$id'");
        $query->execute();
    }
}
