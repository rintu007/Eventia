<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='Style/Login.css' />";
   echo "<link rel='stylesheet' type='text/css' href='Style/style1.css' />"; 
   echo "<link rel='stylesheet' type='text/css' href='ind.css' />";
echo "<link rel='stylesheet' type='text/css' href='Style/Signup1.css' />";




?>
<?php include('server.php') ?>
<?php include('Links.php'); ?>
<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	 
</head>
<body>


<div style="height: 700px; width: 100%;">
 
    
<br>
<div class="header1">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="Login.php">
  <?php include('error.php'); ?>

  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="Regbtn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="signup.php">Sign up</a>
  	</p>
  </form>


</div> 
  
</div>
<?php include('footer.php'); ?>

</body>
</html>
