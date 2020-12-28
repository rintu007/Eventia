<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='ind.css' />";
   echo "<link rel='stylesheet' type='text/css' href='Style/about.css' />";
   echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' />";

  

?>

 <!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  


</head>
<body>
<?php include('Links.php'); ?>

<?php include('navbar.php'); ?>

<br>
<div>
  <center>
  <h1>About Us</h1>
  </center>
    <img src="./images/aboutimg.png" class="textwrap" width="300px" height="380px">
    <h1>  Our Mission</h1>
    <p>
        To be the world leading Event Management Company that delivers high quality, value-driven services while focusing on the uniqueness and peculiarities of our clients’ project.
    </p>
    <h1>Our Vision</h1>
    <p>
        To ensure client satisfaction and loyalty as we deliver personal and unique experiences that are beyond expectation and create long term loyal relationships by consistently providing outstanding service that creates an overall extraordinary event experience
    </p>
    </div>
    <br><br>
    <br><br>
       <div class="row" style="padding-left:100px;"> 
      <div class="column">
        <h2>Location</h2>
        <p> 38 Ontario Street
        <br><br>  Thunder Bay
        <br><br> P7B 3E9</p>
      </div>
  <div class="column">
    <h2>Hours of Operations</h2>
    <p>Monday: 11:00 am - 11:00 pm<br>

          Tuesday: 11:00 am - 11:00 pm <br>

          Wednesday: 11:00 am - 11:00 pm <br>

          Thursday: 11:00 am - 11:00 pm <br>

          Friday: 11:00 am - 11:00 pm <br>

          Saturday: 1:00 pm - 10:00 pm <br>

          Sunday: 1:00 pm - 8:00 pm</p>
  </div>
</div>

<br>
<div >
<footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="footer_blog_section">
                  <img src="./images/log.png" alt="#" style=" border-radius: 50%;height:150px;width:160px;"/>                     
                     <p style="margin-top: 5px;color:white;" ></p>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Navigation</h4>
                     <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Venue</a></li>
                        <li><a href="#">Catering</a></li>
                        <li><a href="#">Entertainment</a></li>

                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Contact Info</h4>
                     <p  style="margin-top: 5px;color:white;"><strong>Corporate Office Address:</strong></p>
                     <p  style="margin-top: 5px;color:white;"><img src="imgs/phone_icon.png" alt="#" /> 1234 River Street New York, NY 36524</p>
                     <p  style="margin-top: 5px;color:white;"><strong>Customer Service:</strong></p>
                     <p  style="margin-top: 5px;color:white;"><img src="imgs/location.png" alt="#" /> 987 654 3210</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Discover</h4>
                     <ul>
                       
                        <li><a href="#">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright text-center">
            <p  style="margin-top: 5px;color:white;">Copyright @ <a href="#">Event@ats.com</a></p>
</div>
      </footer>
</div>

</body>
</html>