<?php
    session_start();
    include("../connection.php");
        $login_check = $_SESSION['user_login'];
        $query = $con->prepare("SELECT * FROM admin WHERE username = :username");
        $query->execute(array(
            'username' => $login_check
        ));
        $user = $query->fetch(PDO::FETCH_OBJ);
        $session_login = $user->username;

        if(!isset($session_login)) {
            header("location:dashboard.php");
        }
?>