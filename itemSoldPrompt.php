<?php
session_start();
?>


<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>

<h1 align = "center">Items Sold</h1><br>


<form action = "itemsSold.php" method = "POST">

<div class = "inputBox">
<input type = "text" name = "Product_ID" placeholder = "Product_ID" required> <br><br>
<input type = "text" name = "Quantity_Sold" placeholder = "Quantity Sold" required> <br><br>


<button class = "inputSubmit" type = "submit"> Submit </button>
</div>


<div><button class="submit" type="button" onclick="window.location.href='ManageInventory.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Items Sold page.                      <br><br>
                    
                    Here you are prompted for info pertaining to the items you sold:  <br><br>
                    In the <b>Product ID</b> text box, enter the product ID of the item you sold.  <br><br>
                    In the <b>Quantity Sold</b> text box, enter the number of items you sold. <br><br>
                                        
                    
                   
  
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
