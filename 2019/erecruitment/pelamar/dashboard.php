<?php
session_start();
if(!isset($_SESSION['user_login'])) { header("location:index.php"); }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>E-Recruitment</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/index-style.css">
    </head>
    <body>
        <div id="container">
            <div id="header">
                
            </div>
            <div id="navbar">
                <div class="leftmenu">
                    <a href="dashboard.php?menu=lowongan">Lowongan</a> /
                    <a href="dashboard.php?menu=profile">Profile</a> /
                    <a href="dashboard.php?menu=formulir">Formulir</a> /
                    <a href="dashboard.php?menu=status">Status</a>
                </div>
                <div class="rightmenu">
                    <label>Hello, <font color="khaki"><?php echo $_SESSION['user_login']; ?></font> |<a href="index.php"><b>Logout</b></a></label>
                </div>
            </div>
                <?php include("content.php"); ?>
            <div id="footer">
                <div class="label">Copyright &copy; 2019, E-Recruitment.</div> 
            </div>
        </div>
    </body>
</html>