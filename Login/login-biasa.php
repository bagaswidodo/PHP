<?php
	$nama = $_POST['username'];
	$password= $_POST['password'];
	
	
	if(empty($nama) && empty($password))
	{
		echo "oops, sepertinya anda belum mengisi semua field yang tersedia :(";
	}
	else 
	{
		if($nama == "admin" && $password=="admin")
		{
			echo "berhasil login sebagai admin :)";
			echo "<br /><a href=logout.php>Logout</a>";
		}
		else
		{
			echo "Maaf, login gagal.";
		}
	}
?>