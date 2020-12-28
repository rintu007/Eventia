<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='Style/style1.css' />";
   echo "<link rel='stylesheet' type='text/css' href='ind.css' />";


?>
<?php include('Links.php'); ?>


 <!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>

<?php include('navbar.php'); ?>


<!--  -->
<div class="container">
	<h2 style="text-align: center;">Catering In Thunder Bay</h2>
<br>

<div class="row">
  <div class="column">
    <div class="card">
       
      <div class="container">
     
        <a href="./cat.php"><img src="./images/pickle.jpg" alt="Mike" style="width:350px;height:290px"></a>
        <h5>Pickle Barrel</h5>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
   
      <div class="container">
      <a href="cat.php"><img src="./images/fine.png" alt="Mike" style="width:350px;height:290px"></a>
         <h5>A fine fit Catering</h5>          
      </div>
    </div>
  </div>
  
   <div class="column">
    <div class="card">
       
     <div class="container">
     <a href="catering3.php"><img src="./images/salt.png" alt="Mike" style="width:350px;height:290px"></a>
         <h5>Salt & Pepper</h5>              
      </div>
    </div>
  </div>
  </div>
  



</div>

 
 </div>

 <?php include('footer.php'); ?>



</body>
</html>