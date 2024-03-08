<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "hr_data";

	$konek = new mysqli($hostname,$username,$password,$database);
	if($konek-> connect_error)
	{
		die("Maaf Koneksi Gagal : ". $connect-> connect_error);
	}
?>