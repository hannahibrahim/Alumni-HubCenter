<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alumni HubCenter</title>
<link rel="stylesheet" href="css/header_navigationbar.css" />
<link rel="stylesheet" href="css/index.css" />
<?php
include_once"setting/index_navigation.php";
?>   

</head>
<body>
<br><br>
<div id="welcome">

<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img class="img" src="pictures/unimas.jpg" width="100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img class="img" src="pictures/alumni.jpeg" width="100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img class="img" src="pictures/event1.jpg" width="100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img class="img" src="pictures/event2.jpeg" width="100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>
<script src="javascript/index.js"></script>
</body>
</html>
