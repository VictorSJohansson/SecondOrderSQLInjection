<?php
session_start();

$mysqli= new mysqli("localhost", "root", "root", "introsecdb");
$search= $_POST['search'];

$query = "SELECT name, id FROM producs WHERE id=1 UNION SELECT table_schema, table_name, 1 FROM information_schema.table";

$result = $mysqli->query($query);

//$row = $result->fetch_array(MYSQLI_NUM);
//printf ("%s (%s)\n", $row[0], $row[1]);
$num = $result->num_rows;
$row = $result->fetch_array(MYSQLI_NUM);
$test = $row[0];

$result->free();
$mysqli->close();
echo $test;

?>