<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='./Style/ind.css' />";
   echo "<link rel='stylesheet' href='style/button.css'/>";

  //include Script

?>
<?php
 if(isset($_POST['addentry'])){

	require_once('./db.conf.php'); 
	 $query= "insert into statusupdate (name,event,confirmation,description,amount)
     VALUES ('$_POST[name]','$_POST[event]','$_POST[status]','$_POST[description]','$_POST[amount]')";

	 $result=mysqli_query($connString,$query); 

	}
 ?>
 
 <?php include('navbar.php'); ?>

<?php include('Links.php'); ?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Eventia</title>
      <style>
  
  .inner{
    padding-left:450px;
  }
 
  </style>
   </head>
   <body>
  
   <div style="color:black" class="inner">
        <h1>Sending Confirmation</h1>
        <form name="confirmuser" action="sendstatus.php" method="post">        
          <table>
        <tr>
                <td>Name</td>
                <td>
                <input type="text" name="name" >
                </td>
        </tr>
        <tr>
                  <td>Event</td>
                  <td>
                  <input type="text" name="event">
                  </td>
          </tr>
         
          <tr>
                <td>Confirmation</td>
                <td>
                    <input type="text" name="status">
                    </td>

              </tr>
          <tr>
                <td>Description</td>
                <td>
                <input type="text" name="description" >
                </td>
              </tr>
              <tr>
                <td>Amount</td>
                <td>
                <input type="number" name="amount" >
                </td>
              </tr>
              <tr>
                  <td>
                  <br>
                  <input type="submit" name="addentry" value="send"  class="Allbtn">
                  </td>
              </tr>
      </table>
      </form>
        </div>                  




</body>
</html>