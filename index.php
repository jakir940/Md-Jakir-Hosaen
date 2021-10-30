<?php
include_once 'header.php';
?>	

<?php
	if (isset($_SESSION['u_id'])) {
 	echo "You are loggd in";
	}
			
?>
		

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body style="background-color:white;">
<div style="background-color:#83c1ff; border: 2px solid grey;
    border-radius: 10px; align-content:center;padding:5px; size:60%;opacity: 0.7 ">
<h2 align="center">Welcome to Travel Guide Bd</h2>
</div>

<!--Slide image divission-->
<div style="background-color:#d5ffd5;  border: 1px solid grey;
    border-radius: 10px;">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="a.jpg" style="width:100%">
  <div class="text">Hills</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="b.jpg" style="width:100%">
  <div class="text">Village</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="c.jpg" style="width:100%">
  <div class="text">Lalkhal</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="d.jpg" style="width:100%">
  <div class="text">tea garden</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</div>
<!--About us-->
<div style="background-color: rgb(255, 233, 233);  border: 1px solid black;
    border-radius: 10px;">
<h1 align="center">About us</h1>

<img src="img/aboutus.jpg" alt="Travel Guide BD" style="width:500px;height:300px;float:left;padding-right: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<p style="padding-bottom: 50px;">
Ever since company founders Zakir, Zahid and Siddiq stapled together their first guidebook after an epic trip across Asia, Lonely Planet has put travellers at the heart of everything we do, informing and inspiring them with trusted content for print and digital from experts who visit every destination.<br><br>

<strong>Mobile app</strong><br><br>
Our beautifully designed, easy-to-use mobile apps put the breadth and depth of Lonely Planet's travel content in the palm of your hand.<br><br>
<a href=" ">Discover our app</a><br><br>


<strong>Publishes</strong><br><br>
We publish travel guides, ebooks, phrasebooks, a range of gift, food and children's titles, and a magazine.
<br><br>
<a href=" ">Visit our shops>></a><br><br>
<strong>Online</strong><br><br>
Our award-winning website gives you the tools to plan your next trip: in-depth information on destinations; inspiring ideas on what to see and do; the Thorn Tree forum to connect with other travellers; and travel guides and other products in our shop.<br><br>

<a href=" ">Explore the world>>></a><br><br>

</p>
</div>



</body>
<?php
include_once 'footer.php';
?>
</html> 
