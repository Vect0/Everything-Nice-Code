<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
<title>Add Inventory</title>
</head>
<body>

<h1 align = "center">Add Inventory</h1><br>

<h2 align = "center">Please enter the item information:</h2>


<form action = "AddInventory.php" method = "POST">

<div class = "inputBox">
<input type = "text" name = "Product_Name" placeholder = "Product Name" required> <br><br>
<input type = "text" name = "Description" placeholder = "Description" required> <br><br>
<input type = "text" name = "Vend_ID" placeholder = "Vendor ID" required> <br><br>
<input type = "text" name = "BuyPrice" placeholder = "Buy Price per unit" required> <br><br>
<input type = "text" name = "SellPrice" placeholder = "Sell Price per unit" required> <br><br>

<button class = "inputSubmit" type = "submit"> Submit </button>
</div>

<div><button class="submit" type="button" onclick="window.location.href='ManageInventory.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Add an Item page.  Here you can enter the information for an item you would like to store in your inventory.
                    <br><br>
                    
                    Here you are prompted for info pertaining to your new item:  <br><br>
                    In the <b>Product Name</b> text box, enter the name of the new item. <br><br>
                    In the <b>Description</b> text box, enter a short description of the new item. <br><br>
                    In the <b>Vendor ID</b> text box, enter the ID of the vendor you purchased the item from.  <br><br>
                    In the <b>Buy Price</b> text box, enter the purchase price of the item.  <br><br>
                    In the <b>Sell Price</b> text box, enter the price you aim to sell the item for.   <br><br>
                   
                    
                    
                   
  
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
