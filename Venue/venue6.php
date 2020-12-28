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
  <h1>Slovak Legion</h1>
  <h2>801 Atlantic Avenue, Thunder Bay, ON</h2>
  <li><a href="#">slovaklegion.com </a></li>
  <li><a href='#'>Capacity: 220</a></li>
  <li><a href='#'>$250 to $2,500</a></li>
  
 
</ul>  
<div>
<button><a href="../form.php">Request Pricing</a></button>
</div>   
<div> 


<div class="w3-content w3-display-container">
<img class="mySlides" src="../images/slovac.jpg" style="width:100%; height:500px;">
  <img class="mySlides" src="../images/slovac1.jpg" style="width:100%; height:500px;">
  <img class="mySlides" src="../images/slovac2.jpg" style="width:100%;  height:500px;">
  

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

<h2 style="text-align:center">About Slovak Legion</h2>

<div class="row">
  <div class="column">
    <div class="card">
     
      <div class="container2">
       
        <p>The Slovak Legion is a multi purpose facility suitable for any occasion. We are in the convenient south core, our property has ample parking for your guests and we are 100% Wheelchair Accessible. We are a friendly, professional and experienced staff who can meet or exceed all of your expectations.</p>
      
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
        
        <p class="title">Capacity: 350</p> 
         <p>$250 to $2,500</p>       
      </div>
    </div>
  </div>


</div>
<!-- pricing ends -->


</body>
</html>