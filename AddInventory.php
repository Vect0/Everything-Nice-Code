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
$Vend_ID= $_POST['Vend_ID'];
$BuyPrice = $_POST['BuyPrice'];
$SellPrice = $_POST['SellPrice'];


$sql09 = mysqli_query($evdb, "SELECT Product_Name FROM inventory WHERE Product_Name= '$Product_Name'");
$num_rows3 = mysqli_num_rows($sql09);
if($num_rows3 >=1)  {

echo " <br> <br> There is already an item that has the product name " . $Product_Name . ". ";
 }


$sql08 = mysqli_query($evdb, "SELECT Vend_ID FROM vendor WHERE Vend_ID = '$Vend_ID'");
$num_rows1 = mysqli_num_rows($sql08);
if($num_rows1 <1)  {

echo " <br> <br> No vendors match that Vendor ID.";
 }
 
 if ($num_rows3 <1) {


if ($num_rows1 >= 1) {

$sql = "
INSERT INTO inventory (Product_Name, Description, Vend_ID, BuyPrice, SellPrice) VALUES ('$Product_Name', '$Description',   
 '$Vend_ID', '$BuyPrice', '$SellPrice') ";

if(mysqli_query($evdb, $sql)){
    print "  .". "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
}



$result = mysqli_query($evdb, "SELECT * FROM inventory");

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Product ID ". $row["Product_ID"]. " - Product Name: " . $row["Product_Name"]. " - Description: " . $row["Description"]. " - Quantity: " . $row["Quantity"].
		" - Vendor ID: " . $row["Vend_ID"]. " - BuyPrice: " . $row["BuyPrice"]. " - SellPrice: " . $row["SellPrice"]. " - In Transit: " . $row["In_Transit"].		 "<br><br>";}
}
}

?>

<br><br> <div><button class="submit" type="button" onclick="window.location.href='AddInventoryPrompt.php'"> Back </div>

<?php   if ($num_rows3 <1 && $num_rows1 >=1){		?>

<br><br><div><button class="submit" type="button" onclick="window.location.href='itemBoughtPrompt.php'"> Record Purchase</div>

<?php 	} 	?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the updated inventory.  That last item you added will be included here.
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
