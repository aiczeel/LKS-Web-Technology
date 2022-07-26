<table border="1" cellspacing="0" cellpadding="4" cellspacing="0" cellpadding="4" width="50%">
<tr><th>Nama Teamplate</th><th>Status</th><th>Aksi</th></tr>
<?php
$tampil=mysql_query("Select*from teamplate");
while($r=mysql_fetch_array($tampil))
{
	echo"<tr>
			<td>$r[nama_teamplate]</td>
			<td>$r[status]</td>
			<td><a href='#'>Edit | <a href='#'>Delete</td></tr>";
}
?>
</table>