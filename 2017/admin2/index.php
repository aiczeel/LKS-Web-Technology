<HTML>
<head>
<title>Administrator LKS</title>
</head>
<style>
*{
	margin:0px;
}
#main{
	border:0px solid #000;
	width:100%;
	height:100%;
	background-color:#e1e1e1;
	font-family:goergia;
}
#header{
	border:1px solid #e9e9e9;
	border-radius:4px 4px 4px 4px;
	width:100%;
	height:20%;
	background-color:#fff;
	margin-bottom:1%;
}
#kiri{
	border:1px solid #e9e9e9;
	border-radius:4px 4px 4px 4px;
	width:20%;
	height:95%;
	float:left;
	margin-left:4%;
	background-color:#fff;
}
#kanan{
	border:1px solid #e9e9e9;
	border-radius:4px 4px 4px 4px;
	width:70%;
	height:95%;
	float:left;
	margin-left:1%;
	background-color:#fff;
}
.kiri{
	margin:4px;
}
.kanan{
	margin:4px;
}
#footer{
	border:1px solid #e9e9e9;
	border-radius:4px 4px 4px 4px;
	width:100%;
	height:7%;
	float:left;
	background-color:#fff;
	margin-top:0.4%;
}
</style>
<body>
<?php
error_reporting(0);
include "koneksi.php";
$menu=$_GET['menu'];
$mainurl="?menu=$menu";
$hapus=$_GET['hapus'];
$edit=$_GET['edit'];
$opsihapus=$_GET['opsihapus'];
?>
<div id="main">
	<div id="kiri">
		<div class="kiri">
		<?php include "menu.php"; ?>
		</div>
	</div>
	<div id="kanan">
		<div class="kanan">
		<?php include "content.php"; ?>
		</div>
	</div>
	<div id="footer">
	<center><b>Administrator LKS 2017. SMK Cyber Media Jakarta</b></center>
	</div>
</div>

</body>
</HTML>