<?php 
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'kursus';

	$conn = mysqli_connect($hostname,$username, $password, $dbname) or die ('Gagal Terhubung ke database');

?>