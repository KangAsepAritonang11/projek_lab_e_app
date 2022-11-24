
<?php 
session_start();
if(!isset($_SESSION["id"])) header("Location: login.php");?>

<!doctype html> 

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="img/religious.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Permanent+Marker&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Kalam&family=M+PLUS+2:wght@600&family=Permanent+Marker&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Kalam&family=M+PLUS+2:wght@600&family=Permanent+Marker&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

        

    <title>Dashboard</title>
  </head>
  <body>
    
    <div class="container">
	<nav class="fixed-top">
		<ul>
			<li><a href="index.php">HOME</li>
				<li><a href="">ABOUT</a>
				<ul class="about">
					<li><a href="index.php">FAQ</a></li>
				</ul>
			</li>			
			<li><a href="">CONTACT</a>
				<ul class="contact">
					<li><a href="index.php">CONTACT ME</a></li>
				</ul>
			</li>
		 	<div class="nama">
			<li>
                <?php
                $username = $_SESSION['a_global']->username; 
                echo "$username";?>
                <a href="logout.php"><i class="far fa-user"></i> Logout</a>
			</li>
		</div>
	</nav>
	</div>
	    <main>
        <section id="courses">
            <header class="courses-header">
                <h1>Daftar Mata Pelajaran</h1>
            </header>

            <div class="row row-cols-1 row-cols-md-3">
                <div class="col">
                    <div class="card shadow">
                        <img src="image/english.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">English</h5>
                           
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <img src="image/math.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Mathematics</h5>
                           
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <img src="image/science.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Science</h5>
                           
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <img src="image/sport.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Sport</h5>
                           
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <img src="image/history.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">History</h5>
                           
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <img src="image/religious.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Religious</h5>
                           
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <img src="image/music.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Music</h5>
                           
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <img src="image/komputer.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Computer </h5>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
		<footer>
        &copy; Septiady Abednego Aritonang 2022
        </footer>
        <footer>
         Silahkan Hubungi kami Jika Mengalami kendala
        Abednego Aritonang 085277929796   
        </footer>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  
    <!-- chatbutton -->
  <div id="chatButton"></div>

  <script> 
    $(function(){
      $("#chatButton").load("chatbot.php");
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  </body>
</html>
