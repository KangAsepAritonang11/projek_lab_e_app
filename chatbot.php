<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Permanent+Marker&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Kalam&family=M+PLUS+2:wght@600&family=Permanent+Marker&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Kalam&family=M+PLUS+2:wght@600&family=Permanent+Marker&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

        <style type="text/css">
        #btn{
            position: fixed;
            right: 0;
            bottom: 0;
            z-index: 1080;
        }
        #btn:hover{
            background-color: gray;
            border: none;
        }
        #chatbot{
            position: fixed;
            right: 0;
            bottom: 0;
            z-index: 1080;
            display: none;
            overflow: auto;
        }
        .pop-up-wrapper{
            position: fixed;
            right: 0;
            bottom: 0;
            z-index: 1080;
            margin-right: 15px;
            margin-bottom: 70px;
            width: 350px;
            background-color: white;
            box-shadow: 3px 5px 10px darkgray;
        }

        .header{
            height: 50px;
            background-color: black;
            color: white;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            padding-top: 13px;
            margin-top: 2px;
        }
        .close{
            font-size: 35px;
            color: white;
            position: absolute;
            right: 14px;
            top: 3px;
        }
        .close:hover{
            cursor: pointer;
            color: white;
        }
        .isi{
            overflow: hidden;
            width: 350px;
            height: 350px;
        }
        .pesan-bot{
            background-color: greenyellow;
            color: black;
            font-size: 14px;
            width: 50%;
            border-radius: 5px;
            padding: 4px;
            margin: 12px;
        }
        .pesan-user{
            background-color: lightgrey;
            color: black;
            font-size: 14px;
            width: 50%;
            border-radius: 5px;
            padding: 4px;
            margin: 12px;
            float: right;
        }
        .footer{
            height: 50px; 
            background-color: white;
            border-top: 1px solid grey;
            padding-top: 10px;
        }
        .pesan{
            width: 85%;

        }
        .btnsend{
            border-style: none;
            background-color: transparent;
            font-size: 18px;
            margin: 2px;
        }
    </style>

    <title></title>
  </head>
  <body>
    <button type="button" onclick="document.getElementById('chatbot').style.display='block'" id="btn" class="btn btn-success rounded-circle p-0 m-3" style="width:50px; height: 50px;">
        <i class="fas fa-solid fa-comment-dots fa-lg"></i>
    </button>
    <div id="chatbot" class="rounded">
        <div class="pop-up-wrapper rounded">
            <div class="header rounded">
                <p>Chatbot</p>
                <span class="close" onclick="document.getElementById('chatbot').style.display='none'">&times;</span>
            </div>
            <div class="isi">
                <div class="chat-bot">
                    <div class="pesan-bot">
                        <p>Hello, it's Bot !</p>
                    </div>
                    <div class="pesan-user">
                        <p>Hi...</p>
                    </div>
                </div>
            </div>
            <div class="footer">
                <form class="form-inline chatform"></form>
                <input type="text" class="pesan" id="pesan" name="chat-form" placeholder="Type your massage...">
                <button type="button" class="btnsend"><i class="fas fa-solid fa-paper-plane"></i></button>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
      $(".btnsend").on("click", function(){
        $pesan = $(".pesan").val();
        $msg = '<div class="pesan-user">' + $pesan + '</div>';
        $(".isi").append($msg);
        $(".pesan").val("");

        $.ajax({
          type: "POST",
          url: "chatbot/chatbot_check.php",
          data: 'text='+$pesan,
          success: function (result){
            $balasan = '<div class="chat-bot"><div class="pesan-bot">'+ result + '</div></div>';
            $(".isi").append($balasan);
            $(".isi").scrollTop($(".isi")[0].scrollHeight);
          }
        });
      });
    });
  </script>




  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  
  </body>
</html>
