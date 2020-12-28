<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='ind.css' />";
   echo "<link rel='stylesheet' type='text/css' href='Style/style1.css' />";
//   echo "<link rel='stylesheet' type='text/css' href='Style/contact.css' />";
   echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' />";
   echo "<link rel='stylesheet' href='style/button.css'/>";

?>
<?php include('Links.php'); ?>

<?php
 if(isset($_POST['addentry'])){

	require_once('./db.conf.php'); 
	 $query= "insert into contact (name,number,email,message)
	 VALUES ('$_POST[name]','$_POST[num]','$_POST[email]','$_POST[msg]')";
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

<br>
<div id="midcontact1">
	<p style="text-align: center;">Please take amount to complete the section below.<br>We look forward from hearing from you</p>
	<form action="contact.php" method="post" id="myForm">
	  		
    		<div align="center">
			      <label><b>Name</b></label>
			        <input type="text" placeholder="Enter the name" name="name"  id="name" required>
			      <br><br>

			      <label><b>Number</b></label>
			        <input type="number" placeholder="Enter phone number" name="num" id="num" required>
			      <br><br>
			      <label><b>Email</b></label>
			        <input type="text" placeholder="Enter email" name="email" id="email" required>
			      <br><br>
			      <label><b>Message</b></label>
			      <textarea name="msg" name="msg" rows="5" cols="30"></textarea>
			      <br><br>			      <center>
			      	<button class="Allbtn" type="submit" name="addentry" >SEND</button>
			      </center>
			      
			  
			      

      		</div>
    </form>

</div>


<br><br>
<br>
<br>
<br>

<?php include('footer.php'); ?>


</body>
</html>