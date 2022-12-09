<?php
include ('login.php'); // Includes Login script

if (isset($_SESSION['login_user'])){
    header("location: profile.php"); //Redirecting to profile page
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="icon" href="./img/logo.png" type="image">
    <link rel="stylesheet" href="stylelog.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-image:url(./img/background.png) ">
    <div class="w3-top">
        <div style ="background-color: #BC884D;" class="w3-bar w3-card header">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="./index.html" class="w3-bar-item w3-button w3-padding-large "style="font-family:Times New Roman; font-size: 18px" ><b>P.A.W.S</b></a>
            
        </div>
    </div>

    <div class="center">


        <h1>Login</h1>

        <form action="login.php" method="post">
            <div class="txt_field">
                <input type="email" id="email" class="form-control" name="email" required>
                <span></span>
                <label>Email</label>

            </div>

            <div class="txt_field">
                <input type="password"id="password" class="form-control" name="password" required>
                <span></span>
                <label>Password</label>

            </div>

            <div class="pass">Forgot Password?</div>
            <input name="submit" type="submit" value="Login">
            <div class="signup_link">
                Not a member? <a href="./registration.html">Signup</a>

            </div>

        </form>

    </div>

</body>

</html>
