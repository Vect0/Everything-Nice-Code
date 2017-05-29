<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>
<h1 align="center">item</h1>



<?php

$evdb = mysqli_connect("localhost", "twininga_wrdp1", "Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice");

$Product_ID = $_POST['Product_ID'];
$Quantity_Sold = $_POST['Quantity_Sold'];
$Product_Name;
$SellPrice;




$sql = "INSERT INTO sales (Product_Name, SellPrice, Product_ID, Sell_Date) (select Product_Name, SellPrice, Product_ID, NOW() from inventory
  WHERE Product_ID = '$Product_ID')";

$sql1 = "UPDATE sales SET NumSold = '$Quantity_Sold' WHERE Sale_ID = LAST_INSERT_id()";

$sql2 = "UPDATE sales SET total = (NumSold * SellPrice) WHERE Sale_ID = LAST_INSERT_id()";



$onhandvalue = mysqli_query($evdb, "SELECT On_Shelf, Product_Name FROM inventory WHERE Product_ID = '$Product_ID'");
$onhand = mysqli_fetch_array($onhandvalue);

$sql3 = "UPDATE inventory SET On_Shelf = (On_Shelf - '$Quantity_Sold') WHERE Product_ID = '$Product_ID'";       //SUBTRACTS FROM ON SHELF
$sql4 = "UPDATE inventory SET Sold = (Sold + '$Quantity_Sold') WHERE Product_ID = '$Product_ID'";             //ADDS TO SOLD
$sql5 = "UPDATE inventory SET Quantity = (Quantity - '$Quantity_Sold') WHERE Product_ID = '$Product_ID'";             //SUBTRACTS FROM QUANTITY


if($Quantity_Sold <= $onhand['On_Shelf']){

if(mysqli_query($evdb, $sql)){
    print mysqli_insert_ID($evdb);
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
}

if(mysqli_query($evdb, $sql1)){
    print "  .". "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
}

if(mysqli_query($evdb, $sql2)){
    print "  .". "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
}


if(mysqli_query($evdb, $sql3)){
    print "  .". "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
}

if(mysqli_query($evdb, $sql4)){
    print "  .". "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
}

if(mysqli_query($evdb, $sql5)){
    print "  .". "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
}

echo "Item Sucessfully Sold!";


} else {
  echo "You can't sell more than you have on hand.  You currently have ". $onhand['On_Shelf'] . " " . $onhand['Product_Name'] . "s on the shelf.";
}




// $result = mysqli_query($evdb, "SELECT * FROM user");
//
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["ID"]. " - Username: " . $row["Username"]. " - Password: " . $row["Password"].
// 		" - First: " . $row["Firstname"]. " - Last: " . $row["Lastname"]. " - About: " . $row["About"]. " - AdminStatus: ". $row["AdminStatus"].
//
// 		"<br><br>";
//     }
?>

<br><br><br><br>
<div><button class="submit" type="button" onclick="window.location.href='itemSoldPrompt.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This page simply exists to verify that you properly recorded your sold items.  Otherwise, you will be told that you attempted to sell more items that you had on hand.
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
