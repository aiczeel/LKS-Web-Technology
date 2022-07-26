<?php 
    $dbhost = "localhost";
    $dbname = "lks";
    $dbuser = "root";
    $dbpass = "";

    try{
        $con = new PDO("mysql:host=$dbhost;dbname=$dbname","$dbuser","$dbpass"); 
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Koneksi Bermasalah:" . $e->getMessage();
    }
?>