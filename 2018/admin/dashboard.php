<?php
include("session.php");
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Administrator</title>
    <link rel="stylesheet" type="text/css" href="../assets/cms_style.css">
</head>
<body>
<h1>Welcome <?php echo $login_session; ?></h1>
<a href="logout.php">Logout</a>
</body>
</html>