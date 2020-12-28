
<?php
	require_once('./db.conf.php'); 
if(count($_POST)>0)
 {
mysqli_query($connString,"UPDATE venue  set venueID='" . $_POST['userid'] . "', event ='" . $_POST['event'] . "', event1='" . $_POST['event1'] . "', people='" . $_POST['people'] .  "',  budget ='" . $_POST['budget'] . "',  date ='" . $_POST['date'] . "',  Srequest ='" . $_POST['Srequest'] . "', name ='" . $_POST['name'] . "', email ='" . $_POST['email'] . "' ,  number ='" . $_POST['number'] . "' ,  description ='" . $_POST['description'] . "' ,  status ='" . $_POST['status'] . "' WHERE VenueID='" . $_POST['userid'] . "'");

$message = "Record Modified Successfully";
}
$result = mysqli_query($connString,"SELECT * FROM venue WHERE venueID='" . $_GET['userid'] . "'");
if (!$result) {
    printf("Error: %s\n", mysqli_error($connString));
    exit();
}
$row= mysqli_fetch_array($result);
?>
<?php include('./Links.php'); ?>
<?php include('navbar.php'); ?>
 <?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='./Style/ind.css' />";
   echo "<link rel='stylesheet' type='text/css' href='./Style/Button.css' />";

?>
<html>
<head>
<title></title>
<style>
  
  .table-inner{
    padding-left:450px;
  }
  a{
    text-decoration:none;
    color:white;
    
  }
  </style>
</head>
<body>
  
      <div class="table-inner">
            <h1>Confirmation</h1>
            <h3>Update Details</h3>
      </div>

      <div>
        <div>
        <form name="frmUser" method="post">
        <div>
        <?php if(isset($message)) 
        
        { echo $message;
        
        } 
        ?>
        </div>
        <br><br>  <br>
          <div class="table-inner">
            <table>
              <tr>
                  <td>Id</td>
                  <td>
                      <input type="hidden" name="userid"  value="<?php echo $row['userid']; ?>">
                      <input type="text" name="userid"  value="<?php echo $row['venueID']; ?>">
                  </td>
              </tr>

              <tr>
                  <td>Event</td>
                  <td>
                  <input type="text" name="event" value="<?php echo $row['event']; ?>">
                  </td>
              </tr>

              <tr>
                  <td> Other Event</td>
                <td>
                <input type="text" name="event1" value="<?php echo $row['event1']; ?>">
                </td>
              </tr>

              <tr>
                <td>People</td>
                <td>
                <input type="text" name="people" value="<?php echo $row['people']; ?>">
                </td>
              </tr>
              <tr>
                <td>Budget</td>
                <td>
                <input type="text" name="budget" value="<?php echo $row['budget']; ?>">
                </td>
              </tr>
              <tr>
                <td>Date</td>
                <td>
                <input type="date" name="date" value="<?php echo $row['date']; ?>">
                </td>
              </tr>
              <tr>
                <td>Speacial Request</td>
                <td>
                <input type="text" name="Srequest" value="<?php echo $row['Srequest']; ?>">
                </td>
              </tr>
              <tr>
                <td>Name</td>
                <td>
                <input type="text" name="name" value="<?php echo $row['name']; ?>">
                </td>
              </tr>
              <tr>
                <td>Email</td>
                <td>
                <input type="text" name="email" value="<?php echo $row['email']; ?>">
                </td>
              </tr>
              <tr>
                <td>number</td>
                <td>
                <input type="number" name="number" value="<?php echo $row['number']; ?>">
                </td>
              </tr>
              <tr>
                <td>Description</td>
                <td>
                <input type="text" name="description" value="<?php echo $row['description']; ?>">
                </td>
              </tr>
              <tr>
                <td>Confirmation</td>
                <td>
                    <input type="text" name="status" value="<?php echo $row['status']; ?>">
                    </td>

              </tr>


              <tr>
                  <td>
                  <br>
                  <input type="submit" name="submit" value="Update"  class="Allbtn">
                  </td>
              </tr>

             
            </table>
           </form>
        <div>   
       
     
</div>
</div>

</body>
</html>
