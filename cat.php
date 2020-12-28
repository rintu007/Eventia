<?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='ind.css' />";

   echo "<link rel='stylesheet' type='text/css' href='Style/style1.css' />";
   echo "<link rel='stylesheet' type='text/css' href='Style/catering.css' />";
   echo "<link rel='stylesheet' href='style/button.css'/>";

  


?>

 <?php include('Links.php'); ?>

 <?php
 if(isset($_POST['addentry'])){

	require_once('./db.conf.php'); 
	 $query= "insert into cat (menu1,qty1,menu2,qty2,menu3,qty3)
     VALUES ('$_POST[drinks]','$_POST[dqty]','$_POST[snack]','$_POST[sqty]','$_POST[vegstr]','$_POST[vqty]')";
	 $result=mysqli_query($connString,$query); 

	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">

<style>
.cat 
{  
  font-family: "Amatic SC", sans-serif; 
  }
</style>


</head>
<body>

<?php include('navbar.php'); ?>


<div class="cat">

<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px;font-family: Amatic SC, sans-serif;">THE MENU</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
          <a href="javascript:void(0)" onclick="openMenu(event, 'Sandwitches');" id="myLink">
            <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Sandwitches</div>
          </a>
          <a href="javascript:void(0)" onclick="openMenu(event, 'pasta');">
            <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Pasta</div>
          </a>
          <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
            <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Starter</div>
          </a>
    </div>



    <div id="Sandwitches" class="w3-container menu w3-padding-32 w3-white">
      <h1 style="font-family: Amatic SC, sans-serif;"><b>BBQ Pulled Pork Sandwiches</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$12.50</span></h1>
      <p class="w3-text-grey"> mustard, mayo & horseradish</p>
      <hr>
   
      <h1 style="font-family: Amatic SC, sans-serif;"><b>Crispy Chicken Sandwiches</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$15.50</span></h1>
      <p class="w3-text-grey">chipotle bbq sauce & garlic mayo</p>
      <hr>
      
      <h1 style="font-family: Amatic SC, sans-serif;"><b>Beef on a Bun</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$17.00</span></h1>
      <p class="w3-text-grey">mustard, mayo & horseradish</p>
      <hr>

      <h1 style="font-family: Amatic SC, sans-serif;"><b>Chicken Parmesan Sandwiches</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$16.50</span></h1>
      <p class="w3-text-grey">mozzarella and tomato sauce</p>
      <hr>

      <h1 style="font-family: Amatic SC, sans-serif;"><b>BBQ Pulled Chicken Sandwich</b> <span class="w3-tag w3-red w3-round">Hot!</span><span class="w3-right w3-tag w3-dark-grey w3-round">$20.00</span></h1>
      <p class="w3-text-grey">mustard & mayo</p>
      <hr>

     
    </div>

    <div id="pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1 style="font-family: Amatic SC, sans-serif;"><b>Lasagna</b> <span class="w3-tag w3-grey w3-round">Popular</span> <span class="w3-right w3-tag w3-dark-grey w3-round">$13.50</span></h1>
      <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
      <hr>
   
      <h1 style="font-family: Amatic SC, sans-serif;"><b>Ravioli</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$14.50</span></h1>
      <p class="w3-text-grey">Ravioli filled with cheese</p>
      <hr>
      
      <h1 style="font-family: Amatic SC, sans-serif;"><b>Spaghetti Classica</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$11.00</span></h1>
      <p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p>
      <hr>

      <h1 style="font-family: Amatic SC, sans-serif;"><b>Seafood pasta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$25.50</span></h1>
      <p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p>
    </div>


    <div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1 style="font-family: Amatic SC, sans-serif;"><b>Today's Soup</b> <span class="w3-tag w3-grey w3-round">Seasonal</span><span class="w3-right w3-tag w3-dark-grey w3-round">$5.50</span></h1>
      <p class="w3-text-grey">Ask the waiter</p>
      <hr>
   
      <h1 style="font-family: Amatic SC, sans-serif;"><b>Bruschetta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$8.50</span></h1>
      <p class="w3-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
      <hr>
      
      <h1 style="font-family: Amatic SC, sans-serif;"><b>Garlic bread</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$9.50</span></h1>
      <p class="w3-text-grey">Grilled ciabatta, garlic butter, onions</p>
      <hr>
      
      <h1 style="font-family: Amatic SC, sans-serif;"><b>Tomozzarella</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$10.50</span></h1>
      <p class="w3-text-grey">Tomatoes and mozzarella</p>
    </div><br>

  </div>
</div>


<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>






<h1 style="font-family: Amatic SC, sans-serif;"><center>Choose your dishes</center>
 </h1>
        
         <center>
          <br><br>

        <form action="cat.php" method="post" style="font-size:35px;">
        
          <label for="drinks">Sandwitches</label>
          <select id="drinks" name="drinks"  >
            <option value=""> Select your Sandwitches</option>
            <option value="none">None</option>
            <option value="orange juice">BBQ Pulled Pork Sandwiches </option>
            <option value="Lime Juice">Crispy Chicken Sandwiches </option>
            <option value="Watermelon juice with mint and lime">Chicken Parmesan Sandwiches  </option>
            <option value="Watermelon juice with mint and lime">BBQ Pulled Chicken Sandwich</option>
              </select>
              <br>
              <label for="dqty">Quantity</label>
              <input type="number" id="dqty" name="dqty">
              <br>
              <br>
              

              <label for="snacks">Pasta</label>
          <select id="snack" name="snack">
            <option value="">Select your Pasta </option>
            <option value="none">None</option>
            <option value="Fresh Fries">Lasagna </option>
            <option value="Burger">Ravioli</option>
            <option value="Samosa">Spaghetti Classica</option>
              </select>
              <br>
              <label for="sqty">Quantity</label>
              <input type="number" id="sqty" name="sqty">
              <br>
               <br>       

      
               
              <label for="vst"> Starters</label>
          <select id="vegstr" name="vegstr">
          <option value="">Select your starters</option>
          <option value="none">None</option>
            <option value="Appam with stew"> Today's Soup Seasonal</option>
            <option value="Chapathi with panner masala">Bruschetta</option>
            <option value="Masala dosa">Garlic bread</option>
             <option value="Masala dosa">Tomozzarella</option>
              </select>
              <br>
              <label for="vqty">Quantity</label>
              <input type="number" id="vqty" name="vqty">
              <br>
               <br>
               
               <button type="submit" name="addentry" class="Allbtn" >Order</button>

      
        
        </form>

        
        <br>
        <br>
        <br>
  </center>
 
 </div>
 <br>
        <br>

 <?php include('footer.php'); ?>


</body>
</html>