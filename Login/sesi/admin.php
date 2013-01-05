<?php
session_start();

if(!isset($_SESSION['admin']))
	header('location:login.html');


?>
<h1>Admin area</h1>
<hr /><hr />
Halo, ini halaman admin. bila anda dapat mengakses halaman ini. berarti anda telah
login :) 
<br />Selamat datang, <strong><?php echo $_SESSION['admin']; ?></strong>
<br /><a href="logout.php">Logout</a>