<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='Style/signup.css' />";
   echo "<link rel='stylesheet' type='text/css' href='Style/Signup1.css' />";

//    echo "<link rel='stylesheet' type='text/css' href='Style/style1.css' />"; 
   echo "<link rel='stylesheet' type='text/css' href='ind.css' />";

?>
<?php include('Links.php'); ?>
<?php include('navbar.php'); ?>
<!-- -->
<?php include('server.php') ?>



<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style/signup.css">
  



</head>
<body>
<div style="height: 700px; width: 100%;">
 
    
<br>
<!-- <div id="midsignup"> -->
<div class="header1">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="Signup.php">
  <?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="Regbtn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="Login.php">Sign in</a>
  	</p>
  </form>

  <br>

</div> 
  
  

<?php include('footer.php'); ?>

</body>
</html>