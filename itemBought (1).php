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
$Quantity_Bought = $_POST['Quantity_Bought'];
$Vend_ID = $_POST['Vend_ID'];


$sql08 = mysqli_query($evdb, "SELECT Vend_ID FROM vendor WHERE Vend_ID = '$Vend_ID'");
$num_rows1 = mysqli_num_rows($sql08);
if($num_rows1 <1)  {

echo " <br> <br> No vendors match that Vendor ID.";
 }

 $sql10 = mysqli_query($evdb, "SELECT Product_ID FROM inventory WHERE Product_ID = '$Product_ID'");
 $num_rows2 = mysqli_num_rows($sql10);
 if($num_rows2 <1)  {

 echo " <br> <br>  No products match that Product ID.";
  }

  

if($num_rows2 >= 1){
  if($num_rows1 >= 1){


$sql = "INSERT INTO orders (Vend_ID, order_date) (select Vend_ID, NOW() from vendor
  WHERE Vend_ID = '$Vend_ID')";

if(mysqli_query($evdb, $sql)){
      print "  .". "<br><br>";
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
  }

$sql06 = "SELECT Order_ID FROM orders WHERE Order_ID = LAST_INSERT_ID()";

$result06 =mysqli_query($evdb, $sql06);

$res06 = mysqli_fetch_array($result06);




$sql02 = "INSERT INTO product_line (Product_ID, BuyPrice) (select Product_ID, BuyPrice from inventory
    WHERE Product_ID = '$Product_ID')";

if(mysqli_query($evdb, $sql02)){
        print "  .". "<br><br>";
    } else{
        echo "ERROR: Could not able to execute $sql02. " . mysqli_error($evdb);
    }

$sql03 = "UPDATE product_line SET Order_ID = ' " . $res06['Order_ID'] . "' WHERE Productline_ID = LAST_INSERT_id()";    //THIS IS THE PROBLEM

if(mysqli_query($evdb, $sql03)){
    print "  .". "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql03. " . mysqli_error($evdb);
}

$sql01 = "UPDATE product_line SET Vend_ID = '$Vend_ID' WHERE Productline_ID = LAST_INSERT_id()";

if(mysqli_query($evdb, $sql01)){
    print "  .". "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql01. " . mysqli_error($evdb);
}


$sql1 = "UPDATE product_line SET NumBought = '$Quantity_Bought' WHERE Productline_ID = LAST_INSERT_id()";

if(mysqli_query($evdb, $sql1)){
    print "  .". "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($evdb);
}

$sql2 = "UPDATE product_line SET boughtTotal = (NumBought * buyPrice) WHERE Productline_ID = LAST_INSERT_id()";

if(mysqli_query($evdb, $sql2)){
    print "  Inventory Updated Succesfully". "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
}



// $onhandvalue = mysqli_query($evdb, "SELECT On_Shelf, Product_Name FROM inventory WHERE Product_ID = '$Product_ID'");
// $onhand = mysqli_fetch_array($onhandvalue);

$sql4 = "UPDATE inventory SET In_Transit = (In_Transit + '$Quantity_Bought') WHERE Product_ID = '$Product_ID'";             //ADDS TO In_Transit


if(mysqli_query($evdb, $sql4)){
    print "  .". "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
    
    
}

$sql5 = "UPDATE inventory SET Quantity = (Quantity + '$Quantity_Bought') WHERE Product_ID = '$Product_ID'";             //ADDS TO Quantity

if(mysqli_query($evdb, $sql5)){
    print "  .". "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
    
    
}

// if($Quantity_Sold <= $onhand['On_Shelf']){



}
}


// } else {
//   echo "You can't sell more than you have on hand.  You currently have ". $onhand['On_Shelf'] . " " . $onhand['Product_Name'] . "s on the shelf.";
// }




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
<div><button class="submit" type="button" onclick="window.location.href='itemBoughtPrompt.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This page is exists simply to verify that you properly recorded your bought item.  Press the <b>Back</b> button to return to the Item Bought page.
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
