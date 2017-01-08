<?php
session_start();

$mysqli= new mysqli("localhost", "root", "root", "introsecdb");
$myusername = $_POST['username'];
$mypassword = $_POST['password'];

$query = "SELECT id, firstname FROM users WHERE username = '$myusername' AND password = '$mypassword'";

$result = $mysqli->query($query);

//$row = $result->fetch_array(MYSQLI_NUM);
$logged = false;
//printf ("%s (%s)\n", $row[0], $row[1]);
$num = $result->num_rows;

if($num === 1){
	while($row = $result->fetch_assoc()){
		$_SESSION['login_user'] = $myusername;
		$_SESSION['name'] = $row["firstname"];
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
/*
if ($conn->query($sql) === TRUE) {
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: ./success.php');*/

 ?>