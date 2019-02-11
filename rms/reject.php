<html>
<head>
<title>Sending email using PHP</title>
</head>
<body>
<?php
   $to = $_POST["usermail"];
   $subject = $_POST["mailsubject"];
   $message = $_POST["mailbody"];
   $header = "From:madhukara@live.com \r\n";
   $retval = mail ($to,$subject,$message,$header);
   
   if( $retval == true )  
   {
      $message =  "Message sent successfully...";
      header('Location: home.php');

   }
   else
   {
      $message =  "Message could not be sent...";
      header('Location: home.php');

   }
   
   echo "<br><br><br><a href='lechalladmin.php'>go back</a>";
?>
</body>
</html>