<?php
// Intentionally vulnerable - SQL Injection
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = " . $id;
$result = mysqli_query($conn, $query);

// Intentionally vulnerable - Command Injection  
$host = $_GET['host'];
$output = shell_exec("ping -c 4 " . $host);
echo $output;

// Intentionally vulnerable - XSS
$name = $_GET['name'];
echo "<h1>Hello " . $name . "</h1>";
?>
