<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>
<h1 align="center">Item</h1>

<h2><u>Here is the item:</u></h2><br>


<?php

$evdb = mysqli_connect("localhost", "twininga_wrdp1", "Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice");

$Product_Name = $_POST['Product_Name'];
// $Description = $_POST['Description'];
// $Quantity = $_POST['Quantity'];
// $Vendor = $_POST['Vendor'];
// $BuyPrice = $_POST['BuyPrice'];
// $SellPrice = $_POST['SellPrice'];

// $sql = mysqli_query($evdb, "SELECT * FROM inventory WHERE 'Product_Name' == $Product_Name");
//
//
// if(mysqli_query($evdb, $sql)){
//     print " ".  "<br><br>";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
// }


$result = mysqli_query($evdb, "SELECT * FROM inventory WHERE Product_Name = '$Product_Name'");

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Product ID: " . $row["Product_ID"]. " - Product_Name: " . $row["Product_Name"]. " - Description: " . $row["Description"].
		" - Quantity: " . $row["Quantity"]. " - Vendor: " . $row["Vendor"]. " - BuyPrice: " . $row["BuyPrice"]. " - SellPrice: ". $row["SellPrice"].

		"<br><br>";
    }

    if (mysqli_num_rows($result) ==0) echo "No products were found for that Product name.";
?>

<div><button class="submit" type="button" onclick="window.location.href='SearchByProductPrompt.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		  Displayed is the information pertaining to the item you just searched for.  This information includes the products attributes including its <b> Product ID </b>.
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
