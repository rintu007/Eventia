<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='Style/style1.css' />"; 
   echo "<link rel='stylesheet' type='text/css' href='ind.css' />";




?>
<?php
	require_once('./db.conf.php'); 

 $query= "SELECT * FROM statusupdate";
 $result=mysqli_query($connString,$query);

 ?>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<?php
   //include CSS Style Sheet


?>
<?php include('Links.php'); ?>

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
table 
   {
    border-collapse: collapse;
    width:90%;
    margin:15px;
   }
   
 
   table td, table th {
  padding-left: 8px;
}
table thead tr {
  height: 60px;
  background: #36304a;
}
tbody tr:nth-child(even) {
  background-color: #f5f5f5;
}

.table100-head th{
  font-family: OpenSans-Regular;
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
  font-weight: unset;
}
tbody tr {
  font-family: OpenSans-Regular;
  font-size: 15px;
  color: #808080;
  line-height: 1.2;
  font-weight: unset;
  padding:20px;
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
                   
                    <a href="login.php">Logout</a>


                </div>
</div>
            </div>
         </nav>
      </div>
   <div class="content1">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
</div>
   
<ul class="breadcrumb">
 
 
<li><a href="main.php">View Status</a></li>
  <li><a href="payment.php">payment</a></li>
</ul>
<div  >
   <br>
<h1>Status</h1>
<div class="table1">

         <form action="VenueRequest.php" method="post">
            <table border="1">
            <thead class="table100-head">
                <th>Name</th>
                <th>event</th>                
                <th>Confirmation</th>              
                <th>Description</th>
                <th>Amount</th>

            </thead>
            <?php
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                    <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['event']; ?></td>
                    <td><?php echo $row['confirmation']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['amount']; ?></td>

                                       
                </tr>
                    <?php
                    }
                    ?>
        </table>
        </form>
        <br>
        </div>
</div>



<?php include('footer.php'); ?>

   </body>
</html>