<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>
<h1 align="center">Inventory</h1>

<h2><u>Here is the updated Inventory:</u></h2><br>


<?php

$evdb = mysqli_connect("localhost", "twininga_wrdp1", "Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice");

$Product_Name = $_POST['Product_Name'];
// $Description = $_POST['Description'];
// $Quantity = $_POST['Quantity'];
// $Vendor = $_POST['Vendor'];
// $BuyPrice = $_POST['BuyPrice'];
// $SellPrice = $_POST['SellPrice'];

$sql = "DELETE FROM inventory WHERE Product_Name = '$Product_Name'";


if(mysqli_query($evdb, $sql)){
    print " ".  "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
}


$result = mysqli_query($evdb, "SELECT * FROM inventory");

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Product ID ". $row["Product_ID"]. " - Product Name: " . $row["Product_Name"]. " - Description: " . $row["Description"].
    " - Quantity: " . $row["Quantity"].
		" - Vendor: " . $row["Vendor"]. " - BuyPrice: " . $row["BuyPrice"]. " - SellPrice: " . $row["SellPrice"]. "<br><br>";}

?>

<div><button class="submit" type="button" onclick="window.location.href='DeleteInventoryPrompt.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		Displayed is the updated inventory after you deleted that last item.
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
