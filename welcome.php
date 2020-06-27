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
    <body>
    <h1>welcome<?php echo $login_session;?></h1>
    <h2><a href="logout.php">sign out</a></h2>
    </body>
</html>