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
    <link rel="stylesheet" href="style.css">
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
              <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hide-small">About Us <i class="fa fa-paw"></i></a>
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
                    <p style="font-family:Bell MT; font-size: 100px ;">
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
                        <br>
                        <br>
                </div>

                
                <p class="w3-text-white" id="welcome">Welcome : <i><?php echo $login_session; ?></i></p> <!--Email ng user-->
                <a href="logout.php" class="">
                    <button style ="background-color: #BC884D" class="w3-text-black w3-small w3-round w3-btn w3-margin-top">
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
      <div class="products" id="about">

          <div class="w3-container ">
              <h2 class="section-text-header">ABOUT US</h2>
          </div>
          <p>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi, We the founder of Pets Are Worth Saving or in short PAWS. This website is created to spread awareness and to help stray animals to find their own owners that will shelter them and love them. Over 12 million of stray animals are now roaming in the streets of Philippines and some of them are being taken care of and being rescued by the animal shelters. But some shelters are also struggling to feed and shelter the animals because of being financially unstable and being overpopulated.
              Due to being overpopulated there are shelters that euthanize the animals that has not been adopted just to rescue and shelter more animals. That’s why the organization named “CARA “ have been advocating and keeping on pursuing the action called "Adopt, Don't Shop" and "Kapon, Hindi Tapon". The reason why they keep on supporting this action is to lessen the population of the stray animals that keeps on rising. They also pursue people to adopt instead of buying expensive animals, because in this
              case just by adopting they can also help the shelters ease their problems on taking care of the animals. Adopting strays is also quite similar into buying a new one but adopting will not cost you anything. You just need to take care of the cat or dog that you adopted and keep on giving love and attention to them.
          </p>
          <br>
          <br>
          <div class="w3-row product-list">
              <div class="w3-col m9 l6 product-left-side w3-animate-left">

                  <img src="https://assets.telegraphindia.com/telegraph/2020/Nov/1606647258_jamshedpur-dog-adoption-1.jpg" />
              </div>
              <div class="w3-col m9 l5 product-right-side">
                  <div class="product-right-side-1">

                      <img src="https://paws.org.ph/wp-content/uploads/2019/05/Direct-Animal-Care.jpeg" />
                  </div>
                  <div class="product-right-side-2">

                      <img src="https://paws.org.ph/wp-content/uploads/2019/05/Header-Rescue.jpg" />
                  </div>
                  <div>

                  </div>
              </div>
          </div>
      </div>

      
  </section>
  

<br>

<div style="margin-top: 40px; padding: 10px 0px; background-color: #BC884D;" id="testimony">
  <div class="w3-center contact" id="contact" >
      <div class=" w3-left-align w3-margin-top contact-info ">
          <h3 style="font-weight: 800;" class="contact-head">GET IN TOUCH</h3>
          <h4 style="font-weight: 600;">
              Our information
          </h4>
          <p>We care about our customers<br>you can contact us for any feedback </p><br>
          <i class="fa fa-envelope icon" style=" font-size: 20px;"> paws1emailaddress@gmail.com</i>
          
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
        <br />
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

                <textarea placeholder="Message" name="Message" style="margin-left: 25px;" rows="1" cols="48" /> </textarea>
            </td>
            <br>
            <br>
            <button style = "background-color: #EAC8A4" type=="submit" class="w3-button w3-round" style="margin-left: 20px;" >Send Message</button>
            </form>
        </div>     
      </div>       
    </div>
  </div>  
    
</body>
</html>