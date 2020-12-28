<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='./ind.css' />";
   echo "<link rel='stylesheet' type='text/css' href='Style/style1.css' />";
   echo "<link rel='stylesheet' type='text/css' href='Style/payment.css' />";
   echo "<link rel='stylesheet' href='style/button.css'/>";

  //include Script

?>
<?php
 if(isset($_POST['addentry'])){

	require_once('./db.conf.php'); 
	 $query= "insert into payment (cardname,cardnumber,expmonth,expyear,cvv)
	 VALUES ('$_POST[cardname]','$_POST[cardnumber]','$_POST[expmonth]','$_POST[expyear]','$_POST[cvv]')";

   $result=mysqli_query($connString,$query); 

	}
 ?>
<?php include('Links.php'); ?>
<?php
 require_once('./db.conf.php');  


 ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Eventia</title>
     <style>
  ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color:  #5F9EA0;
  color:white;
  width:400px;
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}
ul.breadcrumb li+li:before {
  padding: 8px;
  color:white;
  content: "/\00a0";
}
ul.breadcrumb li a {
   color:white;
  text-decoration: none;
}
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}
      </style>
   </head>
   <body>
  
<div id="header" class="header">
         <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
               <a class="navbar-brand" href="#"><img src="./images/log.png" alt="#" style=" border-radius: 50%;height:150px;width:160px;"/></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
              
                <div class="header-right">
                    <a class="active" href="main.php">Home</a>
                   
                    <a href="login.php">Logout</a>


                </div>
</div>
            </div>
         </nav>
      </div>

   
<ul class="breadcrumb">
 
 
<li><a href="main.php">View Status</a></li>
  <li><a href="payment.php">payment</a></li>
</ul>


<h1 style="text-align: center;">Payment Details</h1>
<div style="padding-left:450px;" >
  <div>
    <div>
      <form action="payment.php" method="post">
      <table>
        <tr>
            <td>Name on Card</td>
            <td><input type="text" id="cname" name="cardname" placeholder="John More Doe"></td>
        <tr>
        <tr>
            <td>Credit card number</td><br>
            <td> <input type="number" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"></td>
        <tr>
        <tr>
            <td>Exp Month</td>
            <td> <input type="text" id="expmonth" name="expmonth" placeholder="September"></td>
        <tr>
        <tr>
            <td>Exp Year</td>
            <td><input type="text" id="expyear" name="expyear" placeholder="2018"></td>
        <tr>
        <tr>
            <td>CVV</td>
            <td> <input type="text" id="cvv" name="cvv" placeholder="352"></td>
        <tr>
        <tr>
            <td>
              <input type="submit" value="Pay" name="addentry" class="Allbtn" onclick="msg()">
          </td>
           
        <tr>
      </table>        
       
        <!-- <script type="text/javascript">
          function msg() {
              alert("Payment successsfull.");
    }
        </script> -->
        	
      </form>
    </div>
  </div>
  
</div>


<?php include('footer.php'); ?>


</body>
</html>