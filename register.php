<?php 

$username=$_POST['username'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];


$conn = new mysqli(localhost, root, root, introsecdb);
$name = mysqli_escape_string($firstname);
$sql = "INSERT INTO users (username, password, firstname, lastname)
VALUES ('$username', '$password', '$name', '$lastname')";

if ($conn->query($sql) === TRUE) {
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: ./success.php');
?>