<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>
<?php if (isset($_SESSION['login_user'])) { ?>
<center>
<h1>hAcme Shop</h1>
<h2>Browse products</h2><br>
<button type="submit" name="name" value="1"><img src="apple.jpg"></button>
<button type="submit" name="name" value="2"><img src="apple.jpg"></button>
<button type="submit" name="name" value="3"><img src="apple.jpg"></button>
<form action = "search.php" method="post">
<input type = "text" name = "search"> <input type = "submit" value="search">
</form>
</center>
<?php echo "Välkommen " . $_SESSION['name']; } else{ ?>
            <p>
                <span class="error">You are not authorized to view this page</span> Please <a href="login.php">login.</a>.
            </p>
  <?php } ?>
  <a href="logout.php">log out</a>
        
</body>
</html>