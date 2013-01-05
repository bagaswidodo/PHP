<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Tambahkan data</title>
<script type="text/javascript">
function validate(frm)
{
	judul = frm.judul.value;
	konten = frm.konten.value;

	if(judul == "")
	{
		alert('Maaf, Judul belum di isi');
		frm.judul.focus();
		return false;
	}
	else if(konten == "")
	{
		alert('Maaf, konten belum di isi');
		frm.konten.focus();
		return false;
	}
	else
	{
		return true;
	}
}
</script>
</head>
<body>
<h1>Tambahkan data baru</h1>
<hr /><hr />

<?php
include "koneksi.php";
$id = $_GET['id'];

$cari_di_db = "SELECT * FROM crud WHERE id='$id'";
$exec_this = @mysql_query($cari_di_db) or die(mysql_error());
if(mysql_num_rows($exec_this) > 0)
{
	$data = mysql_fetch_row($exec_this);
?>

<form method="post" id="form1" action="proses-ubah.php" onsubmit="return validate(this)">
	Judul :  <input type="text" name="judul" id="judul" value="<?php echo $data[1]; ?>"><br />
	Konten : <textarea id="konten" name="konten"> <?php echo $data[2]; ?></textarea><br />
	<input type="hidden" name="pointer" id="pointer" value="<?php echo $data[0]; ?>" >
	<input type="submit" value="Ubah">
</form>
<?php 
}else{
	echo "Maaf, data dengan id <strong>$id</strong> tidak di temukan";	
	echo "<br /><a href=tampil.php>Kembali ke tampil data</a>";
}

?>
</body>
</html>