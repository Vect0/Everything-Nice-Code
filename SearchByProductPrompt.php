<?php
session_start();
?>

<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>

  <h1 align = "center">Search Inventory</h1><br>
  <h2 align = "center">Enter the Product Name of the item you would like to see:</h2><br>

<form action = "SearchByProduct.php" method = "POST">
<div class = "inputBox">


<input type = "text" name = "Product_Name" placeholder = "Product Name" required> <br><br>



<button class = "inputSubmit" type = "submit"> Submit </button>
</div>



<div><button class="submit" type="button" onclick="window.location.href='ManageInventory.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Search for Product page.  Here you can enter the product name of an item and search the inventory for it.
                    <br><br>
                    
                    Here you are prompted for info pertaining to your item:  <br><br>
                    In the <b>Product Name</b> text box, enter the product name of the item you would like to see.  You will then be taken to a page displaying the information of that item. <br><br>
                    
                    
                   
  
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
