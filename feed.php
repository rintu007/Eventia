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
	 $query= "insert into feedback (event,F_entertaining ,F_inspired,recommend,suggestions)
	 VALUES ('$_POST[name]','$_POST[ent]','$_POST[insp]','$_POST[rec]','$_POST[msg]')";
	 $result=mysqli_query($connString,$query); 
	
	}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>

<?php include('navbar.php'); ?>

<br>
<div id="midcontact">
	<form action="feed.php" method="post" id="myForm">
		
	  		
    		<div align="center">
			<table>
			<tr>
				<td><b>Which event did you attend?</b></td>
				<td> <input type="text" placeholder="Enter the name" name="name"  id="name" required>
				</td>
			</tr>
			<tr>
				<td><b>Overall, how entertaining was the event?</b></td>
				<td>
					<label><input type="checkbox" id="x" name="ent"/> <span>1</span></label>
				    <label><input type="checkbox" id="y"  name="ent"/> <span>2</span></label>
				    <label><input type="checkbox" id="z" name="ent" /> <span>3</span></label>
				    <label><input type="checkbox" id="x" name="ent" /> <span>4</span></label>
				    <label><input type="checkbox" id="y" name="ent"/> <span>5</span></label>
				</td>
			</tr>	
			<tr>
				<td><b>After the event,how inspired did you feel</b></td>
				<td>
				<label><input type="checkbox" id="x" name="insp" /> <span>1</span></label>
				    <label><input type="checkbox" id="y" name="insp" /> <span>2</span></label>
				    <label><input type="checkbox" id="z" name="insp" /> <span>3</span></label>
				    <label><input type="checkbox" id="x" name="insp" /> <span>4</span></label>
				    <label><input type="checkbox" id="y"name="insp" /> <span>5</span></label>
				</td>
			</tr>	
			<tr>
				<td><b>Would you recommend a similar event to a friend.</b></td>
				<td>
				<label><input type="radio" id="x"  name="rec"/> <span>Yes,definitely</span></label><br>
				    <label><input type="radio" id="y"  name="rec" /> <span>Maybe, if the content was changed.</span></label><br>
				    <label><input type="radio" id="z"  name="rec"/> <span>Maybe, it was cheaper</span></label><br>
				    <label><input type="radio" id="y"  name="rec"/> <span>No</span></label>
				</td>
			</tr>	
			<tr>
				<td><b>Customer Suggestions</b></td>
				<td>
				<textarea name="msg" id="msg" rows="5" cols="30"></textarea>

				</td>
			</tr>		
			<tr>
			
				<td>
				<center>
				<button class="Allbtn" type="submit" name="addentry" >SEND</button>
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