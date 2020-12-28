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
  <h1>Valhalla Inn</h1>
  <h2>1 Valhalla Inn Rd, Thunder Bay, ON</h2>
  <li><a href="#"> valhallainn.com</a></li>
  <li><a href='#'>Capacity: 1000</a></li>
  <li><a href='#'>Pricing: $600 to $2500</a></li>
  
 
</ul>  
<div>
<button><a href="../form.php">Request Pricing</a></button>
</div>   
<div> 


<div class="w3-content w3-display-container">

  <img class="mySlides" src="../images/valla1.jpg" style="width:100%; height:500px;">
  <img class="mySlides" src="../images/valla2.jpg" style="width:100%;  height:500px;">
  <img class="mySlides" src="../images/valla3.jpg" style="width:100%;  height:500px;">
  <img class="mySlides" src="../images/valla4.jpg" style="width:100%;  height:500px;">

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

<h2 style="text-align:center">About Valahalla Inn</h2>

<div class="row">
  <div class="column">
    <div class="card">
     
      <div class="container2">
      <p>
      The Valhalla Inn offers you a choice of 15 distinct banquet rooms. All rooms are comfortable and furnished to the occasion; from wedding receptions, engagement parties and showers to meetings, workshops, pre-convention cocktail parties and reception/mealtime configurations.

Our Fireside Room features an inviting wood burning fireplace perfect for a relaxed rehearsal dinner. Our Viking Room opens out to our Garden Courtyard, lovely for a casual patio brunch or BBQ reception. The Valhalla Ballroom will impress your guests with floor to ceiling windows and a spectacular view of the mountains. Call today. We'd love to show you around our fabulous hotel!
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
      <h1>Pricing</h1>
       
        <p>Pricing: $600 to $2500</p>
        <p></p>
      </div>
    </div>
  </div>


</div>
<!-- pricing ends -->

<!-- pricing starts -->
<div>


<div class="row">
  <div class="column">
    <div class="card">
     
      <div class="container2">
       <h1>Event Spaces</h1>
       
          <div class="w3-row-padding" >
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft w3-black w3-padding">Bedrooms (3)</div>
            <br>
         <p>General Event Space | Maximum Capacity: 50</p>
          </div>
        </div>



      </div>
      
      <div class="w3-row-padding" >
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft w3-black w3-padding">Executive Boardroom (3)</div>
            <br>
         <p>General Event Space | Maximum Capacity: 12</p>
          </div>
        </div>
    </div>
  </div>


</div>
<!-- pricing ends -->

</body>
</html>