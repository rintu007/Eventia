<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='./ind.css' />";
   echo "<link rel='stylesheet' type='text/css' href='Style/style1.css' />";
   echo "<link rel='stylesheet' type='text/css' href='Style/venue.css' />";
  


  


?>
<?php

 require_once('./db.conf.php');  


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/fontawesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">


</head>
<body>

<?php include('navbar.php'); ?>

<!--  -->
<div class="container">
	<h2 style="text-align: center;">VENUES In Thunder Bay</h2>
<br>



<div class="row">
  <div class="column">
    <div class="card">
      <img src="./images/lakehead.jpg" alt="Jane" style="width:354px;height:260px">
      <div class="container">
        <h5>Lakehead University Conference Services</h5>       
      <a href="./Venue/venue1.php" class="stage">Read More</a>
              <p><button class="button" onclick="location.href='form.php'">Request Pricing</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./images/vallahla.jpg" alt="Mike" style="width:354px;height:260px">
      <div class="container">
         <h5>Vallahla Inn</h5>
         <a href="./Venue/venue2.php" class="stage">Read More</a>
             
        <p><button class="button" onclick="location.href='form.php'">Request Pricing</button></p>
      </div>
    </div>
  </div>
  
   <div class="column">
    <div class="card">
      <img src="./images/park.jpg" alt="Mike" style="width:354px;height:260px">
      <div class="container">
         <h5>The Chanterelle On Park</h5>
         <a href="./Venue/venue3.php" class="stage">Read More</a>
               
        <p><button class="button" onclick="location.href='form.php'">Request Pricing</button></p>
      </div>
    </div>
  </div>
  
  
  <div class="column">
    <div class="card">
      <img src="./images/airline hotel.jpg" alt="John"style="width:354px;height:290px">
      <div class="container">
         <h5>Airline Hotel</h5>
         <a href="./Venue/venue4.php" class="stage">Read More</a>
               
        <p><button class="button" onclick="location.href='form.php'">Request Pricing</button></p>
      </div>
    </div>
  </div>

   <div class="column">
    <div class="card">
      <img src="./images/prince.jpg" alt="Mike" style="width:354px;height:290px">
      <div class="container">
      <h5>Price Arthur Hotel and Suites</h5>
      <a href="./Venue/venue5.php" class="stage">Read More</a>
      
                
        <p><button class="button" onclick="location.href='form.php'">Request Pricing</button></p>
      </div>
    </div>
  </div>
  
  
  <div class="column">
    <div class="card">
      <img src="./images/sky.jpg" alt="John"style="width:354px;height:290px">
      <div class="container">
         <h5>Slovac region</h5>
         <a href="./Venue/venue6.php" class="stage">Read More</a>
               
        <p><button class="button" onclick="location.href='form.php'">Request Pricing</button></p>
      </div>
    </div>
  </div>

   
  </div>

 
 </div>


 <?php include('footer.php'); ?>


</body>
</html>