<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>
<h1 align="center">Item</h1>



<?php

$evdb = mysqli_connect("localhost", "twininga_wrdp1", "Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice");

$Product_ID = $_POST['Product_ID'];
$Quantity_Arrived = $_POST['Quantity_Arrived'];
$Product_Name;
$SellPrice;




// $sql = "INSERT INTO revenue (Product_Name, SellPrice, Product_ID) (select Product_Name, SellPrice, Product_ID from inventory
//   WHERE Product_ID = '$Product_ID')";

// $sql1 = "UPDATE revenue SET NumSold = '$Quantity_Sold' WHERE Sale_ID = LAST_INSERT_id()";
//
// $sql2 = "UPDATE revenue SET total = (NumSold * SellPrice) WHERE Sale_ID = LAST_INSERT_id()";



$onhandvalue = mysqli_query($evdb, "SELECT In_Transit, Product_Name FROM inventory WHERE Product_ID = '$Product_ID'");
$onhand = mysqli_fetch_array($onhandvalue);

$sql3 = "UPDATE inventory SET In_Transit = (In_Transit - '$Quantity_Arrived') WHERE Product_ID = '$Product_ID'";       //SUBTRACTS FROM ON SHELF
$sql4 = "UPDATE inventory SET On_Shelf = (On_Shelf + '$Quantity_Arrived') WHERE Product_ID = '$Product_ID'";             //ADDS TO SOLD



if($Quantity_Arrived <= $onhand['In_Transit']){


if(mysqli_query($evdb, $sql3)){
    print "  ". "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
}

if(mysqli_query($evdb, $sql4)){
    print "  ". "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
}

echo "Item Sucessfully Recieved!";


} else {
  echo "You can't recieve more items than you have in transit.  You currently have ". $onhand['In_Transit'] . " "
  . $onhand['Product_Name'] . "s in transit.";
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
<div><button class="submit" type="button" onclick="window.location.href='itemArrivedPrompt.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This page exists simply to inform you that you properly recorded your recieved items.  Otherwise, you will be informed that you attempted to recieve more items that you had in transit.  
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
