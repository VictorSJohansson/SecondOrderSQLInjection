<?php
session_start();

$mysqli= new mysqli("localhost", "root", "root", "introsecdb");
$myusername = $_POST['username'];
$mypassword = $_POST['password'];

$query = "SELECT id, firstname, lastname FROM users WHERE username = '$myusername' AND password = '$mypassword'";

$result = $mysqli->query($query);

$logged = false;
$num = $result->num_rows;

if($num === 1){
	while($row = $result->fetch_assoc()){
		$_SESSION['login_user'] = $myusername;
		$_SESSION['firstname'] = $row["firstname"];
		$_SESSION['lastname'] = $row["lastname"];
		$logged = true;
	}
}

$result->free();
$mysqli->close();
if($logged){
	header('Location: ./browse.php');
}
else{
	header('Location: ./login.php');
}
 ?>