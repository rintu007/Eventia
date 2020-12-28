<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='./Style/ind.css' />";
   echo "<link rel='stylesheet' type='text/css' href='./Style/Button.css' />";
   echo "<link rel='stylesheet' type='text/css' href='./Style/venue.css' />";

?>
<?php
	require_once('./db.conf.php'); 

 $query= "SELECT * FROM Venue";
 $result=mysqli_query($connString,$query);

 ?>

<?php include('./Links.php'); ?>
<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <title>Eventia Admin</title>
     
   </head>
   <body>
   <br>
   <div class="container">
		 <div class="container-table">
			<div class="table1">

         <form action="VenueRequest.php" method="post">
            <table border="1">
            <thead class="table100-head">
                <th> venue ID 	</th>
                <th>event</th>
                <th>Others Events</th>
                <th>No of people</th>
                <th>budget</th>
                <th>date</th>
                <th>Speacial Requests</th>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>

            </thead>
            <?php
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                    <tr>
                    <td><?php echo $row['venueID']; ?></td>
                    <td><?php echo $row['event']; ?></td>
                    <td><?php echo $row['event1']; ?></td>
                    <td><?php echo $row['people']; ?></td>
                    <td><?php echo $row['budget']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['Srequest']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['status']; ?></td>

                    <td>
                    <a href=Requests.php?userid=<?php echo $row['venueID']; ?>" >Confirmation</a>
                  
                    </td>
                    
                </tr>
                    <?php
                    }
                    ?>
        </table>
        </form>
        <br>
        </div>
		</div>
	</div>

   

     
     
   </body>
</html>