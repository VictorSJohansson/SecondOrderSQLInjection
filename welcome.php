<?php
   session_start();
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   <?php
   $logged = "out";
   	if (isset($_SESSION['login_user'])) {
   		$logged = "in";
   	}
   ?>
   <body>
      <h1>Welcome! You are logged <?php echo $logged; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>