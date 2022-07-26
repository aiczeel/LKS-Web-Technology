<?php
include("session.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Administrator</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/index-style.css">
    </head>
    <body>
        <div id="container">
            <div id="header">
                
            </div>
            <div id="navbar">
                <div class="leftmenu">
                    <a href="dashboard.php?menu=data_pelamar">Data Pelamar</a> /
                    <a href="dashboard.php?menu=seleksi_pelamar">Seleksi Pelamar</a> /
                    <a href="dashboard.php?menu=kirim_undangan">Kirim Undangan</a> /
                    <a href="dashboard.php?menu=input_lowongan">Input Lowongan</a> /
                    <a href="dashboard.php?menu=profile_perusahaan">Profile Perusahaan</a>
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