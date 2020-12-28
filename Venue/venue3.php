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
  <h1>The Chanterelle on Park</h1>
  <h2>206 Park Ave, Thunder Bay, ON</h2>
  <li><a href="#">  thechanterelle.ca</a></li>
  <li><a href='#'>Capacity: 220</a></li>
  <li><a href='#'>Pricing: $250 to $2500</a></li>
  
 
</ul>  
<div>
<button><a href="../form.php">Request Pricing</a></button>
</div>   
<div> 


<div class="w3-content w3-display-container">

  <img class="mySlides" src="../images/chan1.jpg" style="width:100%; height:500px;">
  <img class="mySlides" src="../images/chan2.jpg" style="width:100%;  height:500px;">
  <img class="mySlides" src="../images/chan3.jpg" style="width:100%;  height:500px;">
  <img class="mySlides" src="../images/chan4.jpg" style="width:100%;  height:500px;">

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

<h2 style="text-align:center">About the Chanterelle on Park</h2>

<div class="row">
  <div class="column">
    <div class="card">
     
      <div class="container2">
      <p>
      Built in 1885 (est.), 206 Park Ave was originally constructed as a wholesale and retail dry goods space and considered to be the tallest building in Port Arthur, ON. It has since been meticulously restored into an elegant mixed-use event venue with more than 5,000+ square feet of combined indoor space. Recent renovations highlight the building’s industrial past; the venue’s original exposed brick walls, natural light, juxtaposed with elegant leather bars and crystal chandeliers. The Chanterelle on Park is truly a unique setting for any event.

The Chanterelle has partnered exclusively with Tomlin Restaurant to offer superior menus and drink selections that utilize seasonal ingredients of the highest quality. We offer customization to our menu choices, ranging from canapés and food stations to set menus, fit for any occasion. All of the menu items are prepared on-site in our Tomlin designed, custom built kitchen.

The owners are proud to showcase Thunder Bay’s unique history while creating new memories in a stylish, warm and inviting space that was curated to impress guests of any event.
      
<p>
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
       
        <p>Pricing: $250 to $2500</p>
        <p>
</p>
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
        <div class="w3-display-topleft w3-black w3-padding">Ballroom</div>
       <img src="../images/2573603_lg.jpg" alt="House" style="width:250px;height:250px;">
      </div>
      <p>The Ballroom at The Chanterelle has been curated to compliment the history of the building by adding elegant lighting and soft elements of the custom made bar. Every aspect of the space has been carefully and thoughtfully designed. The Ballroom can provide everything from a memorable space for weddings to a comfortable, unique space for corporate events.</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">The Lounge</div>
     
        <img src="../images/2573599.jpg" alt="House" style="width:250px;height:250px;">
        <p>Amenities:</p>
          <p>Dance Floor,Wet Bar, Wireless Internet/Wi-Fi</p>
      </div>
    </div>
    
  </div>


</body>
</html>