<?php
session_start();
include("../connection.php");
error_reporting(0);
    if(isset($_POST['login'])) {
        $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
        $password = !empty($_POST['password']) ? trim($_POST['password']) : null;
        $query = $con->prepare("SELECT * FROM user WHERE email = :email");
        $query->bindParam(":email", $email);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_OBJ);

        $valid = password_verify($password, $user->password);
        if($valid) {
            $_SESSION['user_login'] = $user->name;
            header("location:dashboard.php?menu=lowongan");
        } else { $error = true; }
    }
?>
<div id="form">
    <div id="title">LOGIN ACCOUNT</div>
    <form action="index.php" method="post">
    <?php if(isset($error)): ?> <div id="error">Username atau Password Salah!</div> <?php endif; ?><br>
        <input type="email" name="email" placeholder="Email" class="form-box"><br>
        <input type="password" name="password" placeholder="Password" class="form-box"><br>
        <input type="submit" name="login" value="LOGIN" class="button"><br>
        <div id="text">Not registered? <a href="register.php">Create an account</a></div>
    </form>
</div>