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
    
    if(empty($row->username)){
        $success = true;
    } else {
        $_SESSION['user_login'] = $user->username;
        header("location:dashboard.php");
    }
}
?>
<form action="" method="post">
<input type="text" name="username"><br>
<input type="password" name="password"><br>
<input type="submit" value="masuk">
</form>