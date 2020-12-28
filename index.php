<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='ind.css' />";
   echo "<link rel='stylesheet' type='text/css' href='Faq.css' />";




?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Eventia</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/fontawesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
   </head>
   <body>
   <?php include('navbar.php'); ?>

      <div id="home" class="slider">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="./images/banner1.jpg" alt="slider_img">
                  <div class="ovarlay_slide_cont">
                     <h2>Book your event</h2>
                     <h4>Try something different</h4>
                     <a class="blue_bt" href="appinment.php">Book an appointment</a>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="./images/banner2.jpg" alt="slider_img">
                  <div class="ovarlay_slide_cont">
                  <h2>Book your event</h2>
                     <h4>Try something different</h4>
                     <a class="blue_bt" href="appinment.php">Book an appointment</a>
                  </div>
               </div>
             
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <img src="imgs/left.png" alt="#" />
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <img src="imgs/right.png" alt="#" />
            </a>
         </div>
      </div>
      <div id="about" class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <h3 style="text-transform: none !important">We Build for Your Comfort</h3>
                  <p>To ensure client satisfaction and loyalty as we deliver personal and unique experiences that are beyond expectation and create long term loyal relationships by consistently providing outstanding service that creates an overall extraordinary event experience</p>
               </div>
               <div class="col-md-6 offset-md-1">
                  <div class="full text_align_center">
                     <img class="img-responsive" src="./images/banner3.jpg" alt="#" width="580px";height="450px";/>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="hiw" class="hiw_section layout_padding" style="background: #1a2428;">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3 class="white_font">Top Rating</h3>
                  <p class="white_font"></p>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <img class="margin_top_30 img-responsive" src="./images/vallahla.jpg" alt="#" height=400px; />
                  <h3 class="blog_head">Vallahla</h3>
               </div>
            
               <div class="col-md-4">
                  <img class="margin_top_30 img-responsive" src="./images/park.jpg" alt="#" height=400px; />
                  <h3 class="blog_head">The Chanterelle On Park</h3>
               </div>
            </div>
         </div>
      </div>
      <div id="service" class="hiw_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3>OUR SERVICES</h3>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
              
               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="./images/venue.jpg" alt="#" />
                  <p>Our team thrives in the world of event planning and coordination.We have partnered with the most reputable suppliers in Thunder Bay in order to ensure your event runs smoothly.</p>
                  <br>
                  <br>
                  <a href="#"><h3 class="blog_head">Venue</h3></a>
               </div>
               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="./images/catering.jpg" alt="#" />
                  <p>We can accommodate all of your catering needs by patnering with the best caterers in Thunder Bay. From the perfect backyard, barn, or lakeside wedding to hosting a business conference or other off-site event, let us make your next occasion special.</p>
                  <br> <br>
                  <a href="#"><h3 class="blog_head">Catering</h3></a>
               </div>
               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="./images/entertainment.jpg" alt="#" />
                  <p>Something we stand by no matter what is that every event should be entertaining. We recognize that and gives clients the best entertainment in every form and type under the sun.</p>
                  <a href="#"><h3 class="blog_head">Entertainment</h3></a>
               </div>
             
            </div>
         </div>
      </div>
    <!-- Faq---- -->
<div>
	
   <div class="content">
   <h1>FAQs</h1>
     
   <!-- __________________________ SECTIONS ___________________________ --> 
   
   <h3></h3>
   
   <div>
     <input type="checkbox" id="question1" name="q"  class="questions">
     <div class="plus">+</div>
     <label for="question1" class="question">If in an event the number of people attending the event raise above the number of
   expected people what will you do?</label>
     <div class="answers">
       <p>We always have a plan which can accommodate 100 more people than the number of
   expected people. For example, if we expect 1000 people for an event then we will plan
   for 1100 people for that event. </p>
       
     </div>
   </div>
   <!-- _____________________________________________________ --> 
   <div>
     <input type="checkbox" id="question2" name="q" class="questions">
     <div class="plus">+</div>
     <label for="question2" class="question">
     Will you be doing the stage decoration works or are you assigning to any other groups.
     </label>
     <div class="answers">
       <p>All the decoration works and programs for the event will be done and organised by Our
   event management company and we don’t give contract to other companies. </p>
       
     </div>
   </div>
    
   </div>
      
      <br>
      <div class="subcribe">
         <div class="container">
            <div class="row">
            <!-- hkj -->
            </div>
         </div>
      </div>
      <?php include('footer.php'); ?>

      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
     
   </body>
</html>