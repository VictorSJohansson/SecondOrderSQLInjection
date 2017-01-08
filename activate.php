<?php
session_start();

$mysqli= new mysqli("localhost", "root", "root", "introsecdb");
$username = $_SESSION['login_user'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$query = "INSERT INTO active_users (username, firstname, lastname) VALUES ('$username', '$firstname', '$lastname')";

//multi_query so we can remove firstname and lastname from session variables
if (mysqli_multi_query($mysqli, $query))
{
	header('Location: ./browse.php');  
}

$mysqli->close();
?>