<?php

if($menu==katalog)
{
	include "data/katalog.php";
}
elseif($menu==profil)
{
	include "data/profil.php";
}
elseif($menu==cms)
{
	include"data/cms.php";
}
elseif($menu==testimoni)
{
	include"data/testimoni.php";
}
elseif($menu==kontak)
{
	include "data/kontak.php";
}
else
{
		include "data/home.php";
}
?>