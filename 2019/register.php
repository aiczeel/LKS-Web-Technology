<?php
session_start();
include("connection.php");
error_reporting(0);
if (isset($_POST['register'])) {
    $nama = !empty($_POST['nama']) ? trim($_POST['nama']) : null;
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $ktp = !empty($_POST['ktp']) ? trim($_POST['ktp']) : null;
    $query = $con->prepare("SELECT COUNT(email) AS num FROM akun WHERE email = :email");
    $query->bindParam(':email', $email);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_OBJ);

    if ($row->num > 0) {
        die("<script>alert('username atau password telah digunakan');window.location='register.php';</script>");
    }

    function generate($chars)
    {
        $data = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        return substr(str_shuffle($data), 0, $chars);
    }

    $password = generate(8);
    $query = $con->prepare("INSERT INTO akun (nama,email,ktp,password) VALUES (:nama,:email,:ktp,'$password')");
    $query->bindParam(':nama', $nama);
    $query->bindParam(':email', $email);
    $query->bindParam(':ktp', $ktp);
    $query->execute();

    if ($query) {
        $success = true;
    }
}
?>
<div id="form">
    <div id="title">REGISTER ACCOUNT</div>
    <form action="register.php" method="post">
        <?php if (isset($success)) : ?> <div id="success">Berhasil mendaftar silahkan cek email untuk melihat password. <a href="index.php">Login</a></div> <?php endif; ?><br>
        <input type="text" name="nama" placeholder="Nama Lengkap" class="form-box"><br>
        <input type="email" name="email" placeholder="Email" class="form-box"><br>
        <input type="text" name="ktp" placeholder="No.KTP" class="form-box"><br>
        <input type="submit" name="register" value="CREATE" class="button"><br>
        <div id="text">Already registered? <a href="index.php">Sign In</a></div>
    </form>
</div>