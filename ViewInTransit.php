<?php
session_start();
?>

<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">

<head>
<meta charset="UTF-8">
</head>
<body>
<h1 align="center">Inventory</h1>

<h2><u>Here are all of the in transit items:</u></h2><br>


<?php

$evdb = mysqli_connect("localhost", "twininga_wrdp1", "Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice");;

$result = mysqli_query($evdb, "SELECT * FROM inventory WHERE In_Transit > 0");

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Product ID: " . $row["Product_ID"]. " - Product_Name: " . $row["Product_Name"]. " - Description: " . $row["Description"]. " - Quantity: " . $row["Quantity"].
		 " - Vendor ID: " . $row["Vend_ID"]. " - BuyPrice: "
    . $row["BuyPrice"]. " - SellPrice: ". $row["SellPrice"]. " - In Transit: ". $row["In_Transit"].

		"<br><br>";
    }

?>


<div><button class="submit" type="button" onclick="window.location.href='ManageInventory.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the View In Transit page.  The information displayed is all of the inventory that currently has items in transit.
                    <br><br>
                    
                    
                    
                    
                   
  
  </span>
</div>


<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>


</html>
</body>
