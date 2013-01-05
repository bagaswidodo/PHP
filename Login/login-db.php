<?php
	//buka koneksi dari db
	@mysql_connect("localhost","root","") or die(mysql_error());
	@mysql_select_db("db_pemrograman") or die(mysql_error());

	//get input from form
	$nama = $_POST['username'];
	$password= $_POST['password'];
	
	
	
	if(empty($nama) && empty($password))
	{
		echo "oops, sepertinya anda belum mengisi semua field yang tersedia :(";
	}
	else 
	{
		//cari username dan password di database
		$perintah_cari_user = "SELECT * FROM login "
							  ." WHERE username='$nama' AND password ='$password'";
		//ekseskusi perintahnya menggunakan fungsi mysql_query();
		$exec = @mysql_query($perintah_cari_user) or die(mysql_error());
		//fetch data dari db 
		$data = mysql_fetch_array($exec);
		
		/*
		 * Karena kita menggunakan fetch array, maka untuk mendapatkan data dari 
		 * perintah tadi kita harus mendapatkan key berdasarkan kolomnya di database
		 * @syntax $<varname>['<key_on_database>'];
		 * @example $data['username'];
		 */
		if($nama == $data['username'] && $password==$data['password'])
		{
			//untuk menyapa berdasarkan data nama di database
			echo "Selamat datang " . $data['nama']; 
			echo "<br /><a href=logout.php>Logout</a>";
		}
		else
		{
			echo "Maaf, login gagal.";
		}
	}
?>