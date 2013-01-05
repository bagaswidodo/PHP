<?php
include "koneksi.php";


$judul = $_POST['judul'];
$konten = $_POST['konten'];
$id = $_POST['pointer'];

$perintah_ubah_crud = "UPDATE crud"
						." SET judul='$judul',kontent='$konten'"
						." WHERE id='$id'";
$exec_perintah = @mysql_query($perintah_ubah_crud) or die(mysql_error());

header('location:tampil.php');
?>