<?php
    $dbhost = "localhost";
    $dbname = "erecruitment";
    $dbuser = "root";
    $dbpass = "";

    try {
        $con = new PDO("mysql:host=$dbhost;dbname=$dbname","$dbuser","$dbpass");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $error) {
        echo "Connection Failed:" . $error->getMessage();
    }
?>