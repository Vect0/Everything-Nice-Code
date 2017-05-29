<?php
session_start();



 ?>

<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
<title>Delete Inventory</title>
</head>
<body>

<h1 align = "center"> Delete Inventory:</h1><br>
<h2 align = "center">Please enter the name of the product you would like to remove:</h2><br>



<form action = "DeleteInventory.php" method = "POST">

<div class = "inputBox">
<input type = "text" name = "Product_Name" placeholder = "Product Name" required> <br><br>



<button class = "inputSubmit" type = "submit"> Submit </button>
</div>

<div><button class="submit" type="button" onclick="window.location.href='ManageInventory.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Delete an Item page.  
                    <br><br>
                    
                    Here you are prompted for info pertaining to your the item you would like to delete from your inventory:  <br><br>
                    In the <b>Product Name</b> text box, enter the product name of the item you would like to delete.  This will delete that item from your inventory, entirely. <br><br>
                    
                    
                    
                   
  
  </span>
</div>


<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>
</form>



</html>
</body>
