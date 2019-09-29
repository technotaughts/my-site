<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}
.nav_head{
    display: flex;
    justify-content: space-around;
    align-items: center;
    min-height: 12vh ;
    background-color:#5d4954; 
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.logo{
    color: white;
    text-transform: uppercase;
    letter-spacing: 5px;
    font-size: 20px;
    font-weight:bolder;
}



.nav-link a{
    color: white;
    text-decoration: none;
    font-weight: bold;
    padding: 15px;
    font-size:14px;
}

.burger{
    font-size:30px;
    cursor:pointer;
    color: white;
}

.burger{
    display: none;
}

@media screen and (max-width:650px)
{
    .nav-link a
    {
        display: none;
    }

.burger
    {
        float:right;
        display:block;
        margin-top: 5px;
    }
}

.logoburger{
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 5px;
    font-size:40px;
    margin-bottom: 2px solid #000000;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 2;
  left: 2;
  background-color: #5d4954;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
 
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.3s;

  font-family: Verdana, Geneva, Tahoma, sans-serif;

 
 
  
}

.sidenav a:hover {
  background-color:white;
  color:#5d4954;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<div id="mySidenav" class="sidenav">
    <a class="logoburger" class=logoburger"   href="#Compare">FAMA</a><br>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">Home</a>
    <a href="test.html>PopularComparisons</a>
    <a href="compare.php">Compare</a>
    <a href="news.php">News</a>
    <a href="contactform.php">Contact</a>
</div>
<header class="nav_head">
<div class="logo">
     <span>FAMA</span>
</div>

<div class="nav-link">
    <a href="index.php">Home</a>
    <a href="test.html">PopularComparisons</a>
    <a href="compare.php">Compare</a>
    <a href="news.php">News</a>
    <a href="contactform.php">Contact</a>
</div> 
<span class="burger" style="" onclick="openNav()">&#9776</span>
</header>


    

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   

</body>
</html> 
