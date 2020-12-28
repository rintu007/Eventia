<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='./Style/ind.css' />";

?>
<?php include('./Links.php'); ?>
<?php include('navbar.php'); ?>
<?php
	require_once('./db.conf.php'); 

 $query= "SELECT * FROM entertainment";
 $result=mysqli_query($connString,$query);

 ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <title>Eventia Admin</title>
      <style>

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
<div class="table1">

<form action="Entertainment.php" method="post">
<table border="1">
<thead class="table100-head">
 <th>Id</th>
 <th>Event</th>                
 <th>Others</th>              
 <th>People</th>
 <th>Budget</th>

 <th>Date</th>
 <th>Name</th>                
 <th>Email</th>              
 <th>description</th>
 <th>status</th>
</thead>
<?php
     while ($row = mysqli_fetch_assoc($result))
     {
         ?>
     <tr>
     <td><?php echo $row['id']; ?></td>
     <td><?php echo $row['event']; ?></td>
     <td><?php echo $row['event1']; ?></td>
     <td><?php echo $row['people']; ?></td>
     <td><?php echo $row['budget']; ?></td>
     <td><?php echo $row['date']; ?></td>
     <td><?php echo $row['name']; ?></td>
     <td><?php echo $row['email']; ?></td>
     <td><?php echo $row['description']; ?></td>
     <td><?php echo $row['status']; ?></td>


                        
 </tr>
     <?php
     }
     ?>
</table>
</form>
<br>
</div>
</div>





</body>
</html>