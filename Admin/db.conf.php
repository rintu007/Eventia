
<?php
$servername="localhost";
 $username = "root";
 $password = "";
 $dbname="capstone_eventia";
 $connString = new mysqli($servername,$username,$password,$dbname);
 if ($connString->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 ?>