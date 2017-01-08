<?php
session_start();

$mysqli= new mysqli("localhost", "root", "root", "introsecdb");
$search= $_POST['search'];

$query = "SELECT * FROM products WHERE name = '$search'";

$result = $mysqli->query($query);
$num = $result->num_rows;
//$num = $result->num_rows;
//while ($row=mysqli_fetch_row($result))
$i = 1;
while ($row=mysqli_fetch_row($result)){
			$productname += $row[0];
		$i++;

}
/*while($row = $result->fetch_array(MYSQL_BOTH)){
		$productname = $row[$i];
		$i++;
}*/
$results = var_dump($result);
$result->free();
$mysqli->close();
?>

<!DOCTYPE html>
<html>
<body>
<?php if (isset($_SESSION['login_user'])) { ?>
<center>
<h1>hAcme Shop</h1>
<h2>Search</h2><br>
<p>Found the following products: <?php echo $productname; ?>! Better buy them now! </p>
</center>
<?php echo "Logged in as: " . $_SESSION['name']; } else{ ?>
            <p>
                <span class="error">You are not authorized to view this page</span> Please <a href="login.php">login.</a>.
            </p>
  <?php } ?>
  <a href="logout.php">log out</a>
        
</body>
</html>


test') UNION SELECT table_schema, table_name, 1 FROM information_schema.table; --