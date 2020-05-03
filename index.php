<!DOCTYPE html>
<html>
<title>FoodExpress</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {

    height: 100%;
    color: black;
    line-height: 1.8;
    background-color: #ffff80;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('food.jpg');
    min-height: 700px;
}


.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black" id="myNavbar">
    <a class="w3-bar-item w3-button w3-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small">ABOUT</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small">CONTACT US</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <!--<div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span class="w3-hide-small">WEBSITE</span> LOGO</span>
  </div>-->
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT</h3>
    <p>Want to get the hot and delicious food delivered at your doorsteps? Then definetely you are at the right place.FoodExpress brings you the all new way to get food delivered at any time of the day.</p>
   
   <p>FoodExpress allows you to track the delivery status and keep a ckeck on the updated delivery stations. It allows you to get the real time information of the package.</p>
   <p>So what are you waiting for. Order right now and enjoy the delicious food.</p>


      <div class="w3-center" style="padding:0px 16px" id="LOGIN">
        <div class="w3-grayscale" style="margin-top:32px">
          <div class="w3-center w3-margin-bottom">
               <a href="login.php" class="w3-hover-blue w3-button w3-black w3-square" style="margin: 50px">Admin Login</a>
         
                <a href="track-status.php" class="w3-hover-blue w3-button w3-black w3-square" style="margin: 50px">Status Check</a>
          </div>
        </div>
      </div>
      <div class="w3-content w3-container w3-padding-64" id="contact">
      	<p>CONTACT US AT +91-9989999899</p>
      	<p>Mumbai Headquaters - +91-9977699776</p>
      	<p>Jaipur Headquaters - +91-8877888778</p>
      </div>
      </div>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16 w3-opacity w3-hover-white">
  <p>Designed and Developed by Ayushi </p>

</footer>
 
<script>
  function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
