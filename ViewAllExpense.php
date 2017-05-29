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






$sql06 = mysqli_query($evdb, " SELECT orders.Order_ID, product_line.Productline_ID, product_line.Product_ID, product_line.Vend_ID,
  product_line.NumBought, product_line.BuyPrice, product_line.BoughtTotal, orders.order_date
FROM orders
INNER JOIN product_line ON orders.order_ID = product_line.order_ID 
");

$sql07 = mysqli_query($evdb, " SELECT orders.Order_ID, product_line.Productline_ID, product_line.Product_ID, product_line.Vend_ID,
  product_line.NumBought, product_line.BuyPrice, product_line.BoughtTotal, orders.order_date, SUM(product_line.BoughtTotal) AS Sum
FROM orders
INNER JOIN product_line ON orders.order_ID = product_line.order_ID 
");




//$sql2 = "SELECT SUM(boughtTotal) AS sum FROM product_line WHERE Sell_Date = '$date' ";



//$result1 = mysqli_query($evdb, $sql2);    //total

?>

<h2><u>Items ordered: </u></h2>

<?php

$row1 = mysqli_fetch_assoc($sql07);



    while($row = mysqli_fetch_assoc($sql06)) {
        echo "Order ID ". $row["Order_ID"] . " - Product ID: " . $row["Product_ID"] .
        " - Vendor ID: " . $row["Vend_ID"] ." - Number bought: " . $row["NumBought"] . " - Buy Price: " . $row["BuyPrice"] .
        " - Total: " . $row["BoughtTotal"] . " - Date ordered: " . $row["order_date"] .


         "<br><br>";}

?>

<br><br><br><br>
<?php

/* if (mysqli_num_rows($sql06)>0){
$summ = $row1['Sum'];
echo "You purchased a total of $".  $summ . " worth of inventory on " . $date . ".";
} else echo "No purchases were found for that date."   */

?>

<br><br><br><br>
<div><button class="submit" type="button" onclick="window.location.href='ManageFinances.php'"> Back </div>

<br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		Displayed is all of the expenses you have recorded.  
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

</body>
</html>
