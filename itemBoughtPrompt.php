<?php
session_start();
?>


<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>

<h1 align = "center">Items Bought</h1><br>


<form action = "itemBought.php" method = "POST">

<div class = "inputBox">
<input type = "text" name = "Product_ID" placeholder = "Product_ID" required> <br><br>
<input type = "text" name = "Quantity_Bought" placeholder = "Quantity Bought" required> <br><br>
<input type = "text" name = "Vend_ID" placeholder = "Vendor ID" required> <br><br>



<button class = "inputSubmit" type = "submit"> Submit </button>
</div>


<div><button class="submit" type="button" onclick="window.location.href='ManageInventory.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Bought an Item page.  Here you can record the information for the items you purchased.
                    <br><br>
                    
                    Here you are prompted for info pertaining to your purchased item:  <br><br>
                    In the <b>Product ID</b> text box, enter the product ID of the item youve purchased.   <br><br>
                    In the <b>Quantity Bought</b> text box, enter the quantity of the item you purchased.  <br><br>
                    In the <b>Vendor ID</b> text box, enter the vendor ID of the vendor you purchased the item from.  If you cannot remember the vendor ID, navigate to the View Vendor page to look it up.  <br><br>
                    
                    
                   
  
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
