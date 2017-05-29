<?php
session_start();
?>

<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>

<h1 align = "center">Edit Inventory</h1><br>

<h2 align = "center">Please enter the Product ID of the item you would like to edit:</h2>


<form action = "EditInventoryPrompt.php" method = "POST">

<div class = "inputBox">
<input type = "text" name = "Product_ID" placeholder = "Product ID" required> <br><br>

<button class = "inputSubmit" type = "submit" name = "submit"> Submit </button>
</div>



<div><button class="submit" type="button" onclick="window.location.href='ManageInventory.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Edit an Item page.  Here you can edit an inventory item.
                    <br><br>
                    
                    Here you are prompted for info pertaining to the item you would like to edit:  <br><br>
                    In the <b>Product ID</b> text box, enter the product ID of the item you would like to edit. <br><br>
                    
                    
                    
                   
  
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
