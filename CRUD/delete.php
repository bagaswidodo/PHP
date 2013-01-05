<?php
include "koneksi.php";

$id = $_GET['id'];

$perintah_hapus_crud = "DELETE FROM crud WHERE id='$id'";
$exec_perintah = @mysql_query($perintah_hapus_crud) or die(mysql_error());

header('location:tampil.php');
?>