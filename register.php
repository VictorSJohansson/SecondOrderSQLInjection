<?php 
$conn = new mysqli(localhost, root, root, introsecdb);

$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$name = mysqli_escape_string($firstname);
$sql = "INSERT INTO users (username, password, firstname, lastname)
VALUES ('$username', '$password', '$firstname', '$lastname')";

if ($conn->query($sql) === TRUE) {
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: ./success.php');
?>