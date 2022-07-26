<?php

    class formulir {
        
        public function __construct() {
            
            try {
                $this->con = new PDO("mysql:host=localhost;dbname=erecruitment","root","");
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) { echo "Connection Failed:" . $e->getMessage(); }
        }

        /* START CRUD FORMULIR */
        public function insertFormulir($nama,$posisi,$ttl,$email,$alamat,$foto) {
            $query = $this->con->prepare("INSERT INTO formulir (nama,posisi,ttl,email,alamat,foto) VALUES ('$nama','$posisi','$ttl','$email','$alamat','$foto')");
            $query->execute();
        }

        public function editFormulir($id) {
            $query = $this->con->prepare("SELECT * FROM formulir WHERE id = :id");
            $query->execute(array(":id" => $id));
            $row = $query->fetch(PDO::FETCH_ASSOC);
            return $row;
        }

        public function updateFormulir($id,$nama,$posisi,$ttl,$email,$alamat,$foto) {
            $query = $this->con->prepare("UPDATE formulir SET nama = '$nama', posisi = '$posisi', ttl = '$ttl', email = '$email', alamat = '$alamat', foto = '$foto' WHERE id = '$id'");
            $query->execute();
        }

        public function readFormulir() {
            $query = $this->con->prepare("SELECT * FROM formulir");
            $query->execute();
            return $query;
        }

        public function deleteFormulir($id) {
            $query = $this->con->prepare("DELETE FROM formulir WHERE id = '$id'");
            $query->execute();
        }
        /* END */
    }
?>