<?php
include "koneksi.php";

/*
$sql = "INSERT INTO crud VALUES(";
foreach ($_POST as $key=>$value) {
	//echo "<b>",$key,"</b>" , "| " , $value , "<br />";
	$sql .= "'$value',";
}
$sql .= ")";
*/

$judul = $_POST['judul'];
$konten = $_POST['konten'];

$perintah_insert_crud = "INSERT INTO crud VALUES(null,'$judul','$konten')";
$exec_perintah = @mysql_query($perintah_insert_crud) or die(mysql_error());

header('location:tampil.php');
?>