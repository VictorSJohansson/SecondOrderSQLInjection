<?php
session_start();

$mysqli= new mysqli("localhost", "root", "root", "introsecdb");
$name= $_GET['name'];

$query = "SELECT name FROM products WHERE id = $name";

$result = $mysqli->query($query);
$num = $result->num_rows;
if($num === 1){
	while($row = $result->fetch_assoc()){
		$productname = $row["name"];
	}
}
$result->free();
$mysqli->close();
?>

<!DOCTYPE html>
<html>
<body>
<?php if (isset($_SESSION['login_user'])) { ?>
<center>
<h1>hAcme Shop</h1>
<h2>Browse products</h2><br>
<p>Wow! Such a great <?php echo $productname ?>! Better buy it now! </p>
<img src="apple.jpg">
</center>
<?php echo "Logged in as: " . $_SESSION['name']; } else{ ?>
            <p>
                <span class="error">You are not authorized to view this page</span> Please <a href="login.php">login.</a>.
            </p>
  <?php } ?>
  <a href="logout.php">log out</a>
        
</body>
</html>