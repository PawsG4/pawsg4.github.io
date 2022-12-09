<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="icon" href="./img/logo.png" type="image">
    <link rel="stylesheet" href="success.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-image:url(./img/background.png) ">
    <div class="w3-top">
        <div style ="background-color: #BC884D;" class="w3-bar w3-card header">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="index.html" class="w3-bar-item w3-button w3-padding-large "><b>P.A.W.S</b></a>

        </div>
    </div>
    <style>
    h4 {text-align: center;}
    </style>
    <div class="center">
    <form action="indexlogin.php" method="post">
        <h1>Registration Info</h1>
        
<?php
$username = $_POST['username'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$address = $_POST['address'];
$email = $_POST['email'];
$number = $_POST['number'];
$gender = $_POST['gender'];


if (!empty($firstName) || !empty($lastName) || !empty($username) || !empty($password) || !empty($address) || !empty($email) || !empty($gender) || !empty($number)){
    $host = "localhost"; 
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "test";

    //create a connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
        $select = "SELECT email FROM register WHERE email = ? limit 1";
        $insert = "INSERT INTO register (username, password, firstName, lastName, address, email, number, gender) values (?, ?, ?, ?, ?, ?, ?, ?)";
    
        //prepare statement 
        $stmt = $conn->prepare ($select);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($insert);
            $stmt->bind_param("ssssssis", $username, $password, $firstName, $lastName, $address, $email, $number, $gender);
            $stmt->execute();       

            echo "<h4>Registered Successfully.</h4><br>";
        }else{
            echo "<h4>Username or email is already taken.</h4><br>";
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "All field are required<br><br>";
    die();

}
?>
<input type="submit" value="Sign in">
<br>
<br>
</form>
</div>
</body>
</html>