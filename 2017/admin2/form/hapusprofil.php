<?php
$getUser=mysql_query("select * from identitas where id='$hapus'");
$r=mysql_fetch_array($getUser);

if(!$opsihapus)
{
?>
Anda yakin akan menghapus katalog <b><?php echo "$r[id]"; ?></b> ?<br><br>
<input type="button" value="Ya" onClick="document.location='<?php echo "$mainurl&hapus=$hapus&opsihapus=ya"; ?>';">    
<input type="button" value="Tidak" onClick="document.location='<?php echo "$mainurl"; ?>';">
<?php
}
else
{
	if($opsihapus==ya)
	{
		mysql_query("delete from identitas where id='$hapus'");
		?>
		<script language="javascript">window.location='<?php echo "?menu=profil"; ?>';</script>
		<?php
	}
}
?>