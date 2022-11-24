<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1">
	<title>Daftar |  Web Kursus</title>
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
			width: 300px;
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
		<h2>Daftar</h2>
		<form action="" method="POST">
			<input type="text" name="user" placeholder="Username" class="input-control">
			<input type="email" name="email" placeholder="email" class="input-control">
			<input type="password" name="pass" placeholder="Password" class="input-control">
			<input type="Submit" name="submit" value="Daftar" class="btn">
		</form>
	</div>
	<?php 
		if(isset($_POST['submit'])){ 
			include 'db.php';

			$user = $_POST['user'];
			$email = $_POST['email'];
			$pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);

			$cek = mysqli_query($conn, "INSERT INTO user values('','$user','$email','$password')");
			if($cek){ 
				echo '<script>window.location="login.php"</script>';
			}
			else {
				echo '<script>alert("Coba Lagi")</script>';
			}
		}
	?>
</body>
</html>