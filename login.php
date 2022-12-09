<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else{
// Define $email and $password
$email = $_POST['email'];
$password = $_POST['password'];
$host = "localhost"; 
$dbUsername = "root";
$dbPassword = "";
$dbname = "test";
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT email, password from register where email=? AND password=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$stmt->bind_result($email, $password);
$stmt->store_result();
if($stmt->fetch()) //fetching the contents of the row {
$_SESSION['login_user'] = $email; // Initializing Session
header("location: profile.php"); // Redirecting To Profile Page
}
mysqli_close($conn); // Closing Connection
}
?>