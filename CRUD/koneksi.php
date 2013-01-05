<?php
//definisikan hak akses ke databse
$host = "localhost";//default localhost :)
$userdb = "root";
$passdb = "";
$db_name = "db_pemrograman";

//buka koneksi ke database
@mysql_connect($host,$userdb,$passdb) or die(mysql_error());
//buka akses ke database
@mysql_select_db($db_name) or die(mysql_error());
?>