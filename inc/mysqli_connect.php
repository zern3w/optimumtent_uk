<?php
$user = 'root';
$password = 'root';
$db = 'optimumtents_uk';
$host = 'localhost';

$conn = mysqli_connect(
	"$host", 
	$user, 
	$password
);

if (mysqli_connect_errno()) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL . "<br>";
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL . "<br>";
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}

mysqli_select_db($conn, $db);

include_once('gettimestamp.php');
?>


