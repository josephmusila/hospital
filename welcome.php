<?php
      $db = mysqli_connect("localhost","root","","hospital");
      if (mysqli_connect_errno()){
          echo"failed to connect to mysql: " . mysqli_connect_errno();
          exit();
      
      }else{
          echo"connected";
      }
?>
<html>
      <head>
      <title>welcome</title>
      </head>
      <script>
            
            
            $(document).ready(function(){
                $("body").css("background-color","rgb(50,50,50)");
                $('form,.col').css("color","white");
            });
            $(document).ready(function(){
                $(".footer").css("height","50px");
                $(".footer").css("background-color","rgb(70,70,70)");
                $(".footer").css("text-align","right");
            });
            $(document).ready(function(){
                $("footer p").css("color","blue");
                 $("footer p").css("font-size","20px");
            });
            /*$(document).ready(function(){
                $("footer").mouseOver("text-align","center");
            });*/
        </script>
    <body>
    <h1>welcome<?php echo $login_session;?></h1>
    <h2><a href="logout.php">sign out</a></h2>
    </body>
</html>