<?php
session_start();
include("connection.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $query = $con->prepare("SELECT * FROM akun WHERE email = :email AND password = :password");
        $query->execute(array(
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ));
        $user = $query->fetch(PDO::FETCH_OBJ);

        if(empty($user->email)) {
            $error = true;
        } else {
            $_SESSION['user_login'] = $user->nama;
            header("location:dashboard.php");
        }
    }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Administrator</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/login-style.css">
    </head>
    <body>
    ACCOUNT LOGIN
    <form action="index.php" method="post">
        <?php if(isset($error)): ?> Email atau Password salah! <?php endif; ?><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" value="LOGIN"><br>
        Not registered? <a href="register.php">Create an Account</a>
    </form>
    </body>
</html>