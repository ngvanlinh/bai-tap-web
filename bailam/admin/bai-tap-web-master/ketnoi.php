<?php
$sever = 'localhost';
$user  = 'root';
$pass  = '';
$database ='quanlysanbong';
$conn = mysqli_connect($sever, $user, $pass,$database);
	if(!$conn)
		{
			die("connect failed: ". mysqli_connect_error());
		}
	mysqli_set_charset($conn, 'UTF8');
	?>

