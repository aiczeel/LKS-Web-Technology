<?php
session_start();
if(!isset($_SESSION['user_login'])) { header("location:index.php"); }
?>

Welcome <?= $_SESSION['user_login']; ?>

<a href="logout.php">Logout</a>