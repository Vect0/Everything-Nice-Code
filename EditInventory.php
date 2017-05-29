<?php
session_start();
?>

<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<h1 align="center">Inventory</h1>

<h2><u>Here is all of the current inventory:</u></h2><br>


<?php

$evdb = mysqli_connect("localhost", "twininga_wrdp1", "Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice");

$Product_Name = $_POST['Product_Name'];
$Description = $_POST['Description'];
$Quantity = $_POST['Quantity'];
$Vend_ID= $_POST['Vend_ID'];
$BuyPrice = $_POST['BuyPrice'];
$SellPrice = $_POST['SellPrice'];

$In_Transit = $_POST['In_Transit'];
$On_Shelf = $_POST['On_Shelf'];
$Sold = $_POST['Sold'];


$sql08 = mysqli_query($evdb, "SELECT Vend_ID FROM vendor WHERE Vend_ID = '$Vend_ID'");
$num_rows1 = mysqli_num_rows($sql08);
if($num_rows1 <1)  {

echo " <br> <br> No vendors match that Vendor ID.";
 }


if($num_rows1 >=1) {

$sql = "
UPDATE inventory SET Product_Name = '$Product_Name', Description = '$Description',
Quantity = '$Quantity',Vend_ID= '$Vend_ID',BuyPrice = '$BuyPrice',
SellPrice = '$SellPrice',In_Transit = '$In_Transit',On_Shelf = '$On_Shelf',  Sold = $Sold
WHERE Product_ID = '{$_SESSION['Product_ID']}'

  ";

if(mysqli_query($evdb, $sql)){
    print "  .". "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
}


$result = mysqli_query($evdb, "SELECT * FROM inventory");

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Product ID ". $row["Product_ID"]. " - Product Name: " . $row["Product_Name"]. " - Description: " . $row["Description"].
    " - Quantity: " . $row["Quantity"].
		" - Vendor: " . $row["Vendor"]. " - BuyPrice: " . $row["BuyPrice"]. " - SellPrice: " . $row["SellPrice"].
    " - In Transit: ". $row["In_Transit"]. " - On Shelf: ". $row["On_Shelf"]. " - Sold: ". $row["Sold"].
     "<br><br>";}
     
}

?>

<br><br><div><button class="submit" type="button" onclick="window.location.href='EditInventoryPromptPrompt.php'"> Back </div>

<br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		Displayed is the updated inventory with your edited item.  The aspects of the item you entered new values for are recorded here.  If you were told that no vendors match that vendor ID, please navigate to View Vendors to look it up.
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
