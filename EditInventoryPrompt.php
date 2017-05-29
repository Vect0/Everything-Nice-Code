<?php

session_start();

$evdb = mysqli_connect("localhost", "twininga_wrdp1", "Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice");

 $_SESSION['Product_ID'] = $_POST['Product_ID'];   ?>


 <h2><u>Here is the items current information:</u></h2><br>

 <?php

 $result = mysqli_query($evdb, "SELECT * FROM inventory WHERE Product_ID = '{$_SESSION['Product_ID']}'");

     if (mysqli_num_rows($result) ==0) echo "No products were found for that Product ID.";

     // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
         echo "Id: " . $row["Product_ID"]. " - Product_Name: " . $row["Product_Name"]. " - Description: " . $row["Description"].
 		" - Quantity: " . $row["Quantity"]. " - Vendor: " . $row["Vendor"]. " - BuyPrice: " . $row["BuyPrice"]
    . " - SellPrice: ". $row["SellPrice"]. " - In Transit: ". $row["In_Transit"]. " - On Shelf: ". $row["On_Shelf"].
    " - Sold: ". $row["Sold"].

 		"<br><br>";
     }

?>


<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>


<h2 align = "center">Please enter the new item information:</h2>


<form action = "EditInventory.php" method = "POST">

<div class = "inputBox">
<input type = "text" name = "Product_Name" placeholder = "Product Name" required> <br><br>
<input type = "text" name = "Description" placeholder = "Description" required> <br><br>
<input type = "text" name = "Quantity" placeholder = "Quantity" required> <br><br>
<input type = "text" name = "Vend_ID" placeholder = "Vendor ID" required> <br><br>
<input type = "text" name = "BuyPrice" placeholder = "Buy Price per unit" required> <br><br>
<input type = "text" name = "SellPrice" placeholder = "Sell Price per unit" required> <br><br>
<input type = "text" name = "In_Transit" placeholder = "In Transit" required> <br><br>
<input type = "text" name = "On_Shelf" placeholder = "On Shelf" required> <br><br>
<input type = "text" name = "Sold" placeholder = "Sold" required> <br><br>


<button class = "inputSubmit" type = "submit"> Submit </button>
</div>

<div><button class="submit" type="button" onclick="window.location.href='EditInventoryPromptPrompt.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Edit an Item page.  Here you can enter the new information for the item you would like to edit.
                    <br><br>
                    
                    Here you are prompted for new info pertaining to your item:  <br><br>
                    In the <b>Product Name</b> text box, enter the new name of the item. <br><br>
                    In the <b>Description</b> text box, enter a new description of the item. <br><br>
                    In the <b>Quantity</b> text box, enter a new quantity for the item. <br><br>
                    In the <b>Vendor ID</b> text box, enter the new ID of the vendor you purchased the item from.  <br><br>
                    In the <b>Buy Price</b> text box, enter the new purchase price of the item.  <br><br>
                    In the <b>Sell Price</b> text box, enter the new price you aim to sell the item for.   <br><br>
                    In the <b>In Transit</b> text box, enter how many of the item are in transit.   <br><br>
                    In the <b>On Shelf</b> text box, enter how many of the item are sitting on your shelves .   <br><br>
                    In the <b>Sold</b> text box, enter how many of the item you have sold.   <br><br>
                   
  
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
