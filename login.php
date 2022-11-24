<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1">
	<title>Login | Web Kursus</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<style type="text/css">
		*{
			padding: 0;
			margin:0;
			font-family: 'Quicksand', sans-serif;
		}
		#bg-login{
			background-color: #f8f8f8;
			display: flex;
			height: 100vh;
			justify-content: center;
			align-items: center;
		}
		.box-login{
			width: 400px;
			min-height: 200px;
			border: 1px solid #ccc;
			background-color: #fff;
			padding: 15px;
			box-sizing: border-box;
		}
		.box-login h2{
			text-align: center;
			margin-bottom: 15px;
		}
		.input-control{
			width: 100%;
			padding: 10px;
			margin-bottom: 15px;
			box-sizing: border-box;
		}
		.btn{
			padding: 8px 15px;
			background-color: #00008B;
			color: #fff;
			border: none;
			cursor: pointer;
		}
	</style>
</head>
<body id="bg-login">
	<div class="box-login">
		<h2>Login</h2>
		<form action="" method="POST">
			<input type="text" name="user" placeholder="Username" class="input-control">
			<input type="password" name="pass" placeholder="Password" class="input-control">
			<input type="Submit" name="submit" value="Login" class="btn">
			<a href="daftar.php">Daftar Jika Belum Punya Akun</a>
		</form>
	</div>
	<?php 
		if(isset($_POST['submit'])){
			session_start();
			include 'db.php';

			$user = $_POST['user'];
			$pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

			$cek = mysqli_query($conn, "SELECT * FROM user WHERE username = '".$user."' AND password = '".$pass."' ");
			if(mysqli_num_rows($cek) > 0){
				$d = mysqli_fetch_object($cek);
				$_SESSION['status_login'] = true;
				$_SESSION['a_global'] = $d;
				$_SESSION['username'] = $d->username;
				$_SESSION['id'] = $d->id;
				echo '<script>window.location="index.php"</script>';
			}
			else {
				echo '<script>alert("Username atau Password Anda Salah!")</script>';
			}
		}
	?>
</body>
</html>