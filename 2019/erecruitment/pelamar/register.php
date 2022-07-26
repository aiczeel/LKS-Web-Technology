<?php
session_start();
include("connection.php");
error_reporting(0);
    if(isset($_POST['register'])) {
        $name = !empty($_POST['name']) ? trim($_POST['name']) : null;
        $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
        $password = !empty($_POST['password']) ? trim($_POST['password']) : null;
        $query = $con->prepare("SELECT COUNT(email) AS num FROM user WHERE email = :email");
        $query->bindParam(":email", $email);
        $query->execute();
        $row = $query->fetch(PDO::FETCH_OBJ);

        if($row->num > 0) { die("<script>alert('Alamat email telah terdaftar!');window.location='register.php';</script>"); }

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $query = $con->prepare("INSERT INTO user (name,email,password) VALUES (:name,:email,:password)");
        $query->bindParam(":name", $name);
        $query->bindParam(":email", $email);
        $query->bindParam(":password", $hash);
        $query->execute();

        if($query) { $success = true; }
    }
?>
<div id="form">
    <div id="title">REGISTER ACCOUNT</div>
    <form action="register.php" method="post">
        <?php if(isset($success)): ?> <div id="success">Berhasil Mendaftar. Silahkan <a href="index.php">Login</a></div> <?php endif; ?><br>
        <input type="text" name="name" placeholder="Nama Lengkap" class="form-box"><br>
        <input type="email" name="email" placeholder="Email" class="form-box"><br>
        <input type="password" name="password" placeholder="Password" class="form-box"><br>
        <input type="submit" name="register" value="CREATE" class="button"><br>
        <div id="text">Already registered? <a href="index.php">Sign In</a></div>
    </form>
</div>