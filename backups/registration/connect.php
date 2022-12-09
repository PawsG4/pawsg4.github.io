<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];
$birthDate = $_POST['birthDate'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$number = $_POST['number']

//database connection
$conn = new mysqli('localhost', 'root', '', 'pawsdatabase');
if ($conn->connect_error){
    die('Connection Failed : ' . $conn->connect_error);
}
else {
      $stmt = $conn->prepare("insert into registration(firstName, lastName, username, gender, email, password, address, birthDate, number)
      values(?,?,?,?,?,?,?,?,?)");
      $stmt->bind_param("sssssssii", $firstName, $lastName, $username, $gender, $email, $password, $address, $birthDate, $number);
      $stmt->execute();
      echo "Registration Successfully.";
      $stmt->close();
      $conn->close();
}
?>