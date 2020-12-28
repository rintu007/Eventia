<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='../Style/index.css' />";
   echo "<link rel='stylesheet' type='text/css' href='../Style/style1.css' />";
   echo "<link rel='stylesheet' type='text/css' href='https://www.w3schools.com/w3css/4/w3.css'/>";


?>

 <!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
ul.breadcrumb {
  padding: 8px 16px;
  list-style: none;
  background-color: #eee;
}

ul.breadcrumb li {display: inline;}

ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: "/\00a0";
}

ul.breadcrumb li a {color: green;}

/* ---- */
.mySlides {display:none;}
/* --- */
.w3-content{
    margin-left: auto;
    margin-right: auto;
}
.w3-display-container:hover .w3-display-hover{display:block}
.w3-display-container:hover span.w3-display-hover
{display:inline-block}
.w3-display-hover{display:none}
/* --about  */
.column {
  float: left;
  width: 1200px;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container2 {
  padding: 0 16px;
}

.container2::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>




<div>
<ul class="breadcrumb">
  <li><a href="#">Thunderbay</a></li>
  <li><a href="../Venue.php">Venue</a></li>
  <h1>Lakehead University Conference Services - Thunder Bay</h1>
  <h2>955 Oliver Road, Thunder Bay, ON</h2>
  <li><a href="#"> www.lakeheadu.ca</a></li>
  <li><a href='#'>Capacity: 1000</a></li>
  <li><a href='#'>Pricing: $280 to $300</a></li>
  
 
</ul>  
<div>
<button><a href="../form.php">Request Pricing</a></button>
</div>   
<div> 


<div class="w3-content w3-display-container">
<img class="mySlides" src="../images/lakehead.jpg" style="width:100%; height:500px;">
  <img class="mySlides" src="../images/lakehead1.jpg" style="width:100%; height:500px;">
  <img class="mySlides" src="../images/lakehead2.jpg" style="width:100%;  height:500px;">
  <img class="mySlides" src="../images/lakehead3.jpg" style="width:100%;  height:500px;">
  <img class="mySlides" src="../images/lakehead4.jpg" style="width:100%;  height:500px;">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</div> 
 
 </div>

<!-- about starts -->
<div>

<h2 style="text-align:center">About Lakehead University Conference Services - Thunder Bay</h2>

<div class="row">
  <div class="column">
    <div class="card">
     
      <div class="container2">
       
        <p>Planning an event or a conference can be an overwhelming task, and Lakehead University’s Conference Services Department recognizes your need to look at the bigger picture. Let us handle the details and coordination so you can give your delegates the attention they deserve. You and your guests will have a memorable and comfortable experience during your event with the natural backdrop of Lake Tamblyn & the boreal forest, modern technology in our event spaces, delicious catering from our Lakehead Dining Services, and a start-to-finish connection with one of our experienced Coordinators.</p>
        <p>
Lakehead University offers small and large venues for meetings and special events including boardrooms, AV-equipped classrooms, lecture halls & banquet rooms. Consider hosting your staff meeting, multi-day conference, employee engagement event, family gathering, sports competition or evening cocktail with the nature forest, lake & river as your backdrop in the heart of Thunder Bay.</p>
      </div>
    </div>
  </div>

</div>
<!-- about ends -->


<!-- pricing starts -->
<div>
<div class="row">
  <div class="column">
    <div class="card">
     
      <div class="container2">
       <h1>Package Pricing</h1>
        <p>Meeting Rooms<br>Attendees: 5-1000 | Pricing is for all event types: </p>
        <p>$280 to $300 for 50 people</p>
        
      </div>
    </div>
  </div>
</div>
<!-- pricing ends -->



<div>
<div class="row">
  <div class="column">
    <div class="card">
     
      <div class="container2">
      <div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <center>
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Event Spaces </h3> </center>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Agora</div>
       <img src="../images/img1.jpg" alt="House" style="width:250px;height:250px;">
      </div>
      <p>Maximum Capacity: 200</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Conference Room A</div>
     
        <img src="../images/2619870.jpg" alt="House" style="width:250px;height:250px;">
        <p>Maximum Capacity: 35</p>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Conference Rooms B and E</div>
        
        <img src="../images/2619882.jpg" alt="House" style="width:250px;height:250px;">
        <p>Maximum Capacity: 30</p>
      </div>
    </div>
   
  </div>




      </div>
    </div>
  </div>
</div>


</body>
</html>