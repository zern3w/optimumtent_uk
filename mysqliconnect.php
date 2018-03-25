<?php
$user = 'root';
$password = 'root';
$db = 'optimumtents_uk';
$host = 'localhost';
$port = 8889;

$link = mysqli_connect(
    "$host:$port", 
   $user, 
   $password
);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL . "<br>";
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL . "<br>";
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL . "<br>";
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>
