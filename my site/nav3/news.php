<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

.container {
  position: relative;
  width: 50%;
  max-width: 300px;
}
.image {
  max-height: 100%;
  max-width: 100%;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
}
.column {

  float: left;
  width: 33.33%;
  margin: 10px 16px;
  height: 300px;
  text-align: center;
  position: relative;
}

/* Clearfix (clear floats) */
.row::after {

  content: "";
  clear: both;
  display: table;
}


.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 15px;
  padding: 20px;
  text-align: center;
}

.container:hover .overlay {
  opacity: 1;
}
</style>
</head>
<body>
<?php include 'nav.php' ?>;
<div class="row">
  <div class="column container">
<a href="/mobiles/realme_xt_vs_vivo_z1x-cpd1yv9pe2u6_pd1xx5fj9oz.php">
  <img src="news.jpg" style="width: 80%" class="image">
  <div class="overlay">The Apple iPhone 11 is a great smartphone, which was loaded with a lot of quality features. It comes with a waterproof and dustproof body which is the key attraction of the device.
</div>
</div>

  <div class="column container">
<a href="#">
  <img src="news2.jpg" style="width: 80%" class="image">
  <div class="overlay"> The iPhone 11 Pro and the iPhone 11 Pro Max are the first time when the “Pro” moniker has been adopted by the iPhones. But the biggest highlight from this year’s iPhone announcements has to be the iPhone 11 logically taking over the reins from the iPhone XR
</div>
</div>

<div class="column container">
<a href="#">
  <img src="news3.jpg" style="width: 110%" class="image">
  <div class="overlay">Realme 5 is a budget smartphone that will come with some amazing features. The phone comes with an excellent display that is completely bezel-less and notch-less. It has powerful rear camera which clicks detailed and clear images.</div>
</div>

<div class="column container">
<a href="#">
  <img src="news4.png" style="width: 100%" class="image">
  <div class="overlay">Realme 5 Pro smartphone was launched on 20th August 2019. The phone comes with a 6.30-inch touchscreen display with a resolution of 1080x2340 pixels.</div>
</div>
</div>
</div>
</body>
</html>
