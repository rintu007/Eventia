<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='Style/style1.css' />";
   echo "<link rel='stylesheet' type='text/css' href='ind.css' />";
   echo "<link rel='stylesheet' type='text/css' href='Style/Entertainment.css' />";


?>
<?php include('Links.php'); ?>

<?php
 require_once('./db.conf.php');  


 ?>
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
	<h2 style="text-align: center;">Entertainment In Thunder Bay</h2>
<br>

<div class="row">
  <div class="column">
    <div class="card">
        <div id="vid">
            <video width="350" height="240" controls  controlsList="nodownload">
          <source src="./Video/v1.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
      <br>
      <div class="container">
        <h5>The Marc Joseph Band</h5>
     
        <p><button class="button" onclick="location.href='entertainmentform.php'">Request Pricing</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <div id="vid">
            <video width="350" height="240" controls  controlsList="nodownload">
          <source src="./Video/two.mp4" type="video/mp4" >
          Your browser does not support the video tag.
        </video>
      </div>
      <br>
      <div class="container">
         <h5>The DNA Project</h5>          
        <p><button class="button" onclick="location.href='entertainmentform.php'">Request Pricing</button></p>
      </div>
    </div>
  </div>
  
   <div class="column">
    <div class="card">
        <div id="vid">
                <video width="350" height="240" controls  controlsList="nodownload">
              <source src="./Video/v2.mp4" type="video/mp4" >
              Your browser does not support the video tag.
            </video>
          </div>
          <br>
     <div class="container">
         <h5>Stereoflavour Entertainment</h5>              
        <p><button class="button" onclick="location.href='entertainmentform.php'">Request Pricing</button></p>
      </div>
    </div>
  </div>
  </div>
  
  <div class="column">
    <div class="card">
    <div id="vid">
            <video width="345" height="240" controls  controlsList="nodownload">
          <source src="./Video/v3.mp4" type="video/mp4" >
          Your browser does not support the video tag.
        </video>
      </div>
      <br>
      <div class="container">
         <h5>The Sound Parade</h5>            
        <p><button class="button" onclick="location.href='entertainmentform.php'">Request Pricing</button></p>
      </div>
    </div>
  </div>

   <div class="column">
    <div class="card">
    <div id="vid">
            <video width="350" height="240" controls  controlsList="nodownload">
          <source src="./Video/v4.mp4" type="video/mp4" >
          Your browser does not support the video tag.
        </video>
      </div>
      <br>
      <div class="container">
         <h5>The Digs</h5>            
        <p><button class="button" onclick="location.href='entertainmentform.php'">Request Pricing</button></p>
      </div>
    </div>
  </div>
  
  
  <div class="column">
    <div class="card">
    <div id="vid">
            <video width="350" height="240" controls  controlsList="nodownload">
          <source src="./Video/v5.mp4" type="video/mp4" >
          Your browser does not support the video tag.
        </video>
        </div>
        <br>
      <div class="container">
         <h5>The St. Royals</h5>           
        <p><button class="button" onclick="location.href='entertainmentform.php'">Request Pricing</button></p>
      </div>
    </div>
  </div>

   <div class="column">
    <div class="card">
    <div id="vid">
            <video width="350" height="240" controls  controlsList="nodownload">
          <source src="./Video/v6.mp4" type="video/mp4" >
          Your browser does not support the video tag.
        </video>
      </div>
      <br>
      <div class="container">
         <h5>Universal Boogie Band</h5>           
        <p><button class="button" onclick="location.href='entertainmentform.php'">Request Pricing</button></p>
      </div>
    </div>
  </div>

</div>

 
 </div>


 <?php include('footer.php'); ?>


</body>
</html>