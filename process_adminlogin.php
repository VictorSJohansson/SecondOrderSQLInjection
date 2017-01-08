<?php
session_start();

$mysqli= new mysqli("localhost", "root", "root", "introsecdb");
$myusername = $_POST['username'];
$mypassword = $_POST['password'];

$query = "SELECT id FROM admins WHERE username = (SELECT username FROM users WHERE username = '$myusername' AND password = '$mypassword')";

$result = $mysqli->query($query);

$logged = false;
$num = $result->num_rows;

if($num === 1){
	while($row = $result->fetch_assoc()){
		$_SESSION['login_user'] = $myusername;
		$_SESSION['admin_id'] = $row['id'];
		$logged = true;
	}
}

$result->free();
$mysqli->close();
if($logged){
	header('Location: ./admin.php');
}
else{
	header('Location: ./login.php');
}
?>