<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='ind.css' />";
   echo "<link rel='stylesheet' type='text/css' href='Style/style1.css' />";
   echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' />";
   echo "<link rel='stylesheet' href='style/button.css'/>";

?>
<?php include('Links.php'); ?>

<?php
 if(isset($_POST['addentry'])){

	require_once('./db.conf.php'); 
	 $query= "insert into appointment (name,event ,description,time,date)
	 VALUES ('$_POST[name]','$_POST[event]','$_POST[desc]','$_POST[time]','$_POST[date]')";
	 $result=mysqli_query($connString,$query); 
	
	}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>appointment</title>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>

<?php include('navbar.php'); ?>

<br>
<div id="midcontact">
	<form action="appinment.php" method="post" id="myForm">
		
	  		
    		<div align="center">
			<table>
			<tr>
				<td><b>Name</b></td>
				<td> <input type="text" placeholder="Enter the name" name="name"  id="name" required>
				</td>
			</tr>
			<tr>
				<td><b>Event</b></td>
				<td>
                <input type="text" placeholder="Enter the event" name="event"  id="event" required>
				</td>
			</tr>	
			<tr>
				<td><b>Description</b></td>
				<td>
                <textarea name="desc" name="desc" rows="5" cols="30"></textarea>

				</td>
			</tr>	
			<tr>
				<td><b>Time</b></td>
				<td>
                <input type="text"  name="time"  id="time" required>

				</td>
			</tr>	
			<tr>
				<td><b>Date</b></td>
				<td>
                <input type="date"  name="date"  id="date" required>

				</td>
			</tr>		
			<tr>
			
				<td>
				<center>
				<button class="Allbtn" type="submit" name="addentry" >Book</button>
				</center>

				</td>
			</tr>		
		</table> 
			     
			      
			  
			      

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