<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "indonesia";

	$konek = mysqli_connect($servername, $username, $password, $database);

	if( !$konek ) {
		echo "<script>
				setTimeout( function() {
						alert('Koneksi Database Gagal!');
				}, 200);
			  </script>";
	}
?>