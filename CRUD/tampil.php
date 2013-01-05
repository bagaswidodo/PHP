<?php
/*
 * fungsi include (melampirkan) semacam import di java. yakni menyertakan file lain
 * dalam satu sistem
 */
include 'koneksi.php';

$perintah_tampilkan = "SELECT * FROM crud";
$exec_perintah_tampilkan = @mysql_query($perintah_tampilkan) or die(mysql_error());

?>
<!--  
disini akan di demonstrasikan teknik escape PHP. jadi untuk mengurangi kebingungan 
mana PHP dan mana yang HTML escape (lompat)kan :)
-->
<h1>CRUD Application</h1>
<hr /><hr />
CRUD (Cread Read/Retrieve Update Delete) demo ^_^ <br /><br />
[<a href="tambah.html">Tambahkan data</a>]
<br /><br />
<table border=1>
	<tr>
		<td>No</td>
		<td>Judul</td>
		<td>Konten</td>
		<td>Action</td>
	</tr>
	<?php 
	$i = 1;
	while($data = mysql_fetch_row($exec_perintah_tampilkan))
	{
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $data[1]; ?></td>
		<td><?php echo substr($data[2],0,100); ?></td>
		<td>
		[<a href="edit.php?id=<?php echo $data[0]; ?>">Edit</a>]
		[<a href="delete.php?id=<?php echo $data[0]; ?>" onclick="return konfirmasikan()">Delete</a>]
		</td>
	</tr>
	<?php $i++; } ?>
</table>
<script type="text/javascript">
function konfirmasikan()
{
	var a = confirm('Apakah anda yakin ingin menghapus data ini ?');
	if(a == true)
		return true;
	else
		return false;
}
</script>