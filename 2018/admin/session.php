<?php
include("../config.php");
session_start();
    $user_check = $_SESSION['login_user'];
    $query = $con->prepare("SELECT * FROM user WHERE username = :username");
    $query->execute(array(
        'username' => $user_check
    ));
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $login_session = $row['username'];

    if(!isset($login_session)){
        header("location:dashboard.php");
    }
?>