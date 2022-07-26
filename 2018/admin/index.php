<?php
session_start();
include("../config.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $query = $con->prepare("SELECT * FROM user WHERE username = :username AND password = :password");
    $query->execute(array(
        'username' => $_POST['username'],
        'password' => $_POST['password']
    ));
    $row = $query->fetch(PDO::FETCH_ASSOC);

    if(empty($row['username'])){
        echo "Username atau Password salah!";
    }else{
        $_SESSION['login_user'] = $row['username'];
        header("location:dashboard.php");
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Administrator</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/login_style.css">
</head>
<body>
<h1></h1>
<form action="" method="post">
<div id="form">
    <h1>Administrator Login</h1>
    <div id="line"></div>
    <div id="form-box">
    <div class="username">
        <label>Username</label>
        <input type="text" name="username" class="form-box">
    </div>
    <div class="password">
        <label>Password</label>
        <input type="password" name="password" class="form-box">
    </div>
    </div>
    <div id="line"></div>
    <div id="button-box">
        <input type="submit" value="Login" class="button">
    </div>
</div>
</form>
</body>
</html>