<!DOCTYPE html>
<html>
<head>
	    <link rel="stylesheet" type="text/css" href="index.css">
	    <title>phone comparison</title>
</head>
<body>
<?php include 'nav.php' ?>;
    
  <div class="slideshow-container">

          <!-- Full-width images with number and caption text -->
 <div class="aa" >
          <div class="mySlides fade" align="center">
      <div class="numbertext" >1 / 3</div>
        <img src="news5.jpg" style="width: 100%" >
      <div class="text">Iphone X</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
        <img src="news6.jpg" style="width:100%">
      <div class="text">Iphone Xs</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
        <img src="news7.jpg" style="width:100%">
      <div class="text">Realme</div>
    </div>

      <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
<br>

<!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
</div>  


<div class="line"> a</div> 
<nav align="center">
  <div class="row">
      <div class="polaroid column" >
          <a href="#image">
          <img src="upload/samsang galaxy a50.jpg" onclick="img1click()" alt="Samsung Galaxy A50" >
          </a>
          <div class="container">
              <p>Samsung Galaxy A50</p>
          </div>
      </div>
      <div class="polaroid column" >
          <a href="#image">
          <img src="upload/Samsung Galaxy A8+.jpg" onclick="img2click()" alt="Samsung Galaxy A8">
          </a>
          <div class="container">
                  <p>Samsung Galaxy A8+</p>
          </div>
      </div>
      <div class="polaroid  column" >
          <a href="#image">
          <img  src="upload/Samsung Galaxy M30.jpg" onclick="img3click()"alt="Samsung Galaxy M30">
          </a>
          <div class="container">
                  <p>Samsung Galaxy M30</p>
          </div>
      </div>
  </div>
  </nav>

  <div class="line"> </div> 

</body>

<script type="text/javascript">
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
</html>