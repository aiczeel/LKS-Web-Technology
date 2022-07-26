<?php
session_start();
include("../connection.php");
        $user_check = $_SESSION['user_login'];
        $query = $con->prepare("SELECT * FROM admin WHERE username = :username");
        $query->execute(array(
            'username' => $user_check
        ));
        $row = $query->fetch(PDO::FETCH_OBJ);
        $session_login = $row->username;

        if(!isset($session_login)) {
            header("location:dashboard.php");
        }
?>