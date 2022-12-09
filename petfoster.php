<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo.png" type="image">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylepets.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Pets Are Worth Saving</title>
</head>

<body style="background-image:url(./img/background.png) ">
<header class="header" id="top">
        <div class="w3-top">
            <div style ="background-color: #BC884D;" class="w3-bar w3-card header">
              <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
              <a href="#top" class="w3-bar-item w3-button w3-padding-large " style="font-family:Times New Roman; font-size: 18px"><b>P.A.W.S</b></a>
              <span class="w3-right">

              <div class="dropdown">
                <button style="color:black" class="dropbtn w3-bar-item w3-button w3-padding-large w3-hide-small">Family
                  <i class="fa fa-paw"></i>
                </button>
                <div class="dropdown-content">
                  <a href=family2.php>Family <i class="fa fa-paw"></i></a>
                  <a href="./dogs.php">Dogs</a>
                  <a href="./cats.php">Cats</a>
                  <a href="./petfoster.php">Fostering</a>
                </div>
              </div>
              <a href="profile.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">About Us <i class="fa fa-paw"></i></a>
              <a href="./FAQ2.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">FAQ <i class="fa fa-paw"></i></a>
              <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contact</i></a>
            </span>
            </div>
          </div>
          <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
            <a href="#about" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">About Us</a>
            <a href="family2.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Family</a>
            <a href="#testimony" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Testimony</a>
            <a href="#SignUp" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">SignUp</a>
          </div>
    </header>
    <main>
      <div  class="hero-section w3-animate-left " id="home">
          <div class="hero-section-main">
              <div class="hero-section-into-text w3-margin-top">
                  <h1 class="w3-text-white">
                      <p style="font-family:Bell MT;">
                          <u>P.A.W.S</u>
                      </p>
                  </h1>
                  <p class="w3-right w3-text-white w3-small w3-hide-small hero-qoute "> The purpose of PETS ARE WORTH SAVING (PAWS) is to place stray, abandoned, and unwanted shelter animals into desirable, loving homes. All animals that are rescued from local shelters are placed in foster homes where they will receive love, attention, and medical care before being placed with their new families.</p>
                  <div class="w3-text-white l " style="margin-top:10px">
                      <p>Follow us on Social media</p>
                      <div class="w3-margin-top">
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="img/facebook.png"  style= "border: 1px" width="25" height="25"/></a>
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="img/instagram.png" style= "border: 1px" width="25" height="25"/></a>
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="img/snapchat.png" style= "border: 1px" width="25" height="25"/></a>
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="img/pinterest.png" style= "border: 1px" width="25" height="25"/></a>
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="img/twitter.png" style= "border: 1px" width="25" height="25"/></a>
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="img/linkedin.png" style= "border: 1px" width="25" height="25"/></a>
                      </div>
                      <br>
                  <br>
                  </div>
                
                  <p class="w3-text-white" id="welcome">Welcome : <i><?php echo $login_session; ?></i></p> <!--Email ng user-->
                <a href="logout.php" class="">
                    <button style ="background-color: #BC884D;" class="w3-text-black w3-small w3-round w3-btn w3-margin-top">
                        LOGOUT
                    </button>
                </a><!--LOGOUT BUTTON-->

              </div>
          </div>    
          </div>
    </main>
    <section>
      <style>
          img {
              border: 5px solid black;
          }
      </style>
  <!--FOSTER INFORMATION HEHEXD-->
  <div class="products" id="about">

  <div class="w3-container ">
  <h2 class="section-text-header">BECOME A FOSTER PARENT OF THIS CUTE KITTENS</h2>
        </div>
        </div>
  <h3 class="outlinetitle" style="text-align:center;"><b>YOUNG KITTENS NEED FOSTERING<br></b></h3>
  <div class="outlinetext" style="text-align:center;">
    These are some of the pets under our care right now. They are seeking for permanent homes.<br>
    In the meantime, they are available for foster care while they await adoption.<br>
    <br>
    While they are not yet in a foster or permanent home,<br>
    It would be really beneficial if we could receive financial assistance.<br>
    to continue caring for them until they are finally adopted
 </div>
    <br>
    <div class="fosterimage" >
      <img src="img\foster1_cats.jpg">
  </div>
  <h3 class="outlinetitle" style="text-align:center;"><b> Be a Foster Parent for Young Kittens </b></h3>
  <div class="outlinetext" style="text-align:center;">
    Young kittens who need to be bottle-fed and who would be best cared for in a home are under PAWS's care.<br>
    <br>
    Please consider becoming a foster parent for these fur babies if you have a little more room at home, some free time,<br>
     and a willingness to give. Simply complete the Contract form.<br>
      You may also help us care for them by by donating through the channels below.

    </div>
    </p>
    <div class="new-arrived-products">
  <a href="howtoadopt.php">
  <div class="w3-margin-top" style="overflow: hidden;  padding: 0px 25px;">
        <button style = "background-color: #BC884D" type="button" class="w3-button w3-round w3-padding-large" style="color:black" >
            <p style="color:black"><b>How to adopt a pet</b></p></button></a>
          </div>

  <a href="policies.php">
  <div class="w3-margin-top" style="overflow: hidden;  padding: 0px 25px;">
        <button style = "background-color: #BC884D" type="button" class="w3-button w3-round w3-padding-large" style="color:black" >
            <p style="color:black"><b>P.A.W.S Adoption policies</b></p></button></a>

        </div>
  </div>
    <br>
    <br>
  <div style="text-align:center;" class="linkbox">
    <div class="linkcolor">
      <a href="./dogs.php" target="_self"><b>View our gallery of Pet Dogs for Adoption</b></a>
      <a href="./cats.php" target="_self"><b>View our gallery of Pet Cats for Adoption</b></a>
    </div>
</div>
      <h3 class="outlinetitle" style="text-align:center;"><b> Help us by Donating </b></h3>
      <div style="text-align:center;" class="linkbox">
        <div class="linkcolor">
      <a href="img/gcash.png" target="_blank"><b>Gcash</b></a>
      <a href="https://www.petwarehouse.ph/" target="_blank"><b>PetWarehouse</b></a>
      <a href="img/paymaya.png" target="_blank"><b>Paymaya</b></a>
    </div>
  </div>
  <!--Customer FeedBack-->
  <div style="margin-top: 40px; padding: 10px 0px; background-color: #BC884D;" id="testimony">
    <div class="w3-center contact" id="contact" >
        <div class=" w3-left-align w3-margin-top contact-info ">
            <h3 style="font-weight: 800;" class="contact-head">GET IN TOUCH</h3>
            <h4 style="font-weight: 600;">
                Our information
            </h4>
            <p>We care about our customers<br>you can contact us for any feedback</p>
            <h4 style="font-weight: 600;">Follow Us </h4>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="img/facebook.png"  style= "border: 1px" width="25" height="25"/></a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="img/instagram.png" style= "border: 1px" width="25" height="25"/></a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="img/snapchat.png" style= "border: 1px" width="25" height="25"/></a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="img/pinterest.png" style= "border: 1px" width="25" height="25"/></a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="img/twitter.png" style= "border: 1px" width="25" height="25"/></a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="img/linkedin.png" style= "border: 1px" width="25" height="25"/></a>
        </div>
      
          <br>
          <br>
          <br/>
          <div class="w3-margin-to  w3-left-align">
              <h3 style="font-weight: 800;"><b>Contact Us</b></h3>
              <form action="https://formsubmit.co/paws1emailaddress@gmail.com" method="POST">
              <label><i class="fa fa-user icon " style=" margin-right: 5px;font-size: 20px;"></i></label>
              <input placeholder="First name" name="Firstname" class="w3-margin-top" type="text" />
  
              <label><i class="fa fa-user icon" style=" margin-right: 5px;font-size: 20px;"></i></label>
              <input placeholder="Last name" name="Lastname" class="w3-margin-top" type="text" />
  
              <br>
  
              <label><i class="fa fa-envelope icon" style=" margin-right: 2px;font-size: 20px;"></i></label>
              <input placeholder="Email" name="Emailaddress" class="w3-margin-top" type="email" />
  
              <label><i class="fa fa-phone icon"  style=" margin-right: 2px;font-size: 20px;"></i></label>
              <input placeholder="Phone Number" name="Phonenumber" class="w3-margin-top" type="number" />
              <br>
              <td>
                  <h4 style="font-weight:800"><b>Message</b></h4>
  
                  <textarea placeholder="Message" name="Message" style="margin-left: 25px;" rows="1" cols="48"> </textarea>
              </td>
              <br>
              <br>
              <button style = "background-color: #EAC8A4" type="submit" class="w3-button w3-round" style="margin-left: 20px;" >Send Message</button>
  
          </div>     
        </div>       
      </div>
    </div>   
      
  </body>
  </html>