<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='Style/style1.css' />"; 
   echo "<link rel='stylesheet' type='text/css' href='ind.css' />";
   echo "<link rel='stylesheet' href='style/button.css'/>";



 ?>
 <?php include('Links.php'); ?>

 <?php
if(isset($_POST['addentry'])){

require_once('./db.conf.php'); 
 $query= "insert into entertainment (event,event1, people,budget,date,name,email,description,status)
 VALUES ('$_POST[event]','$_POST[event1]','$_POST[people]','$_POST[Budget]','$_POST[date]','$_POST[name]','$_POST[email]','$_POST[dcomment]','Not confirmed')";
 $result=mysqli_query($connString,$query); 
}

?>
 <!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>

<?php include('navbar.php'); ?>

<div style="padding-left:360px;">
<h1>Request Pricing</h1>
         <form action="entertainmentform.php" method="post" id="myForm">
     <table>           
           <tr>
           <td>Event</td> 
                  <td><input type = "text" list="event" name="event" require>
                     <datalist id="event" >
                           <option value="Wedding" data-id="1">
                           <option value="Birthday" data-id="2">
                           <option value="Conference" data-id="3">
                           <option value="others" data-id="3">
                  </datalist>
                  </td>
           </tr>
           <tr>
                  <td>if Others, please specify event</td> 
                  <td><input type = "text" name = "event1" id = "event1" require></td>
           </tr>
           <tr>
                  <td>How many people would attend</td> 
                  <td><input type = "text" name = "people" id = "people" require></td>
           </tr>
           <tr>
                  <td>Budget</td> 
                  <td><input type="number" name="Budget" id="Budget" require></td>
           </tr>
           <tr>
              <td>Date</td>
              <td><input type = "date" name = "date" id = "date" require></td>
           </tr>
          
           <br>
      
                  <tr>
                     <td>Name </td>
                     <td><input type = "text" name= "name" id= "name" require></td>
                  </tr>
                  <tr>
                     <td>E-mail </td>
                     <td><input type="email" name="email" id="email" value=""  size="15" require></td>
                  </tr>
                          
                  <tr>
                     <td>Event Description </td>
                     <td><textarea rows="5" cols="30" id="dcomment" name="dcomment" require></textarea></td><br>
                  </tr>                
                  <tr>   

                  <td><br>
                  <center>
                  <button  type="submit" name="addentry" class="Allbtn">Request Pricing</button></td>               
                  </center>
                  </tr>	
            </table>

     </form>
</div>
<?php include('footer.php'); ?>

</body>
</html>