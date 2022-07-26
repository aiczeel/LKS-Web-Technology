<?php
session_start();
include("../connection.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $query = $con->prepare("SELECT * FROM admin WHERE username = :username AND password = :password");
        $query->execute(array(
            'username' => $_POST['username'],
            'password' => md5($_POST['password'])
        ));
        $user = $query->fetch(PDO::FETCH_OBJ);

        if(empty($user->username)) {
            $error = true;
        } else {
            $_SESSION['user_login'] = $user->name;
            header("location:dashboard.php?menu=data_pelamar");
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
    ADMINISTRATOR LOGIN
    <form action="" method="post">
        <?php if(isset($error)): ?> Username atau Password salah! <?php endif; ?><br>
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" value="LOGIN">
    </form>
    </body>
</html>