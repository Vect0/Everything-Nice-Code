<?php
session_start();
?>


<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>

<h1 align = "center">Item Arrived</h1><br>


<form action = "itemArrived.php" method = "POST">

<div class = "inputBox">
<input type = "text" name = "Product_ID" placeholder = "Product_ID" required> <br><br>
<input type = "text" name = "Quantity_Arrived" placeholder = "Arrived Quantity" required> <br><br>


<button class = "inputSubmit" type = "submit"> Submit </button>
</div>


<div><button class="submit" type="button" onclick="window.location.href='ManageInventory.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Item Recieved page.  Here you can record the receipt of the items you purchased previously that were in transit.
                    <br><br>
                    
                    Here you are prompted for info pertaining to your recieved items:  <br><br>
                    In the <b>Product ID</b> text box, enter the product ID of the item you recieved.  If you cannot remember the product ID, simply use the View Inventory or Search for Product pages to look it up. <br><br>
                    In the <b>Arrived Quantity</b> text box, enter how many of the item you recieved.   <br><br>
                    
                    
                    
                   
  
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
