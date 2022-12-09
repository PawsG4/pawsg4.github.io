<?php
$host = "localhost"; 
$dbUsername = "root";
$dbPassword = "";
$dbname = "test";
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT email from register where email = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email'];
?>