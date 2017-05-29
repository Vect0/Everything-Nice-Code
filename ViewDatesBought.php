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

if(isset($_POST['from'], $_POST['to'])) {

$from_date = $_POST['from'];
$to_date = $_POST['to'];
$totalrev = 0;

//echo "The first date is {$from_date} and the second date is {$to_date}";
}

if ($from_date > $to_date) echo "Please enter concurrent dates.";


if ($from_date <= $to_date) {


$sql06 = mysqli_query($evdb, " SELECT orders.Order_ID, product_line.Productline_ID, product_line.Product_ID, product_line.Vend_ID,
  product_line.NumBought, product_line.BuyPrice, product_line.BoughtTotal, orders.order_date
FROM orders
INNER JOIN product_line ON orders.order_ID = product_line.order_ID WHERE orders.order_date BETWEEN '$from_date' AND '$to_date'
");

$sql07 = mysqli_query($evdb, " SELECT orders.Order_ID, product_line.Productline_ID, product_line.Product_ID, product_line.Vend_ID,
  product_line.NumBought, product_line.BuyPrice, product_line.BoughtTotal, orders.order_date, SUM(product_line.BoughtTotal) AS Sum
FROM orders
INNER JOIN product_line ON orders.order_ID = product_line.order_ID WHERE orders.order_date BETWEEN '$from_date' AND '$to_date'
");




//$sql2 = "SELECT SUM(boughtTotal) AS sum FROM product_line WHERE Sell_Date = '$date' ";

?>

<h2><u>Items ordered: </u></h2>

<?php




//$result1 = mysqli_query($evdb, $sql2);    //total
$row1 = mysqli_fetch_assoc($sql07);



    while($row = mysqli_fetch_assoc($sql06)) {
        echo "Order ID ". $row["Order_ID"] . " - Product ID: " . $row["Product_ID"] .
        " - Vendor ID: " . $row["Vend_ID"] ." - Number bought: " . $row["NumBought"] . " - Buy Price: " . $row["BuyPrice"] .
        " - Total: " . $row["BoughtTotal"] . " - Date ordered: " . $row["order_date"] .


         "<br><br>";}

       }

?>

<br><br><br><br>
<?php

if ($from_date <= $to_date) {


if (mysqli_num_rows($sql06)>0){
$summ = $row1['Sum'];
echo "You purchased a total of $".  $summ . " worth of inventory between " . $from_date . " and " . $to_date . ".";
} else echo "No purchases were found for that date.";

}

?>

<br><br><br><br>
<div><button class="submit" type="button" onclick="window.location.href='ViewDatesBoughtPrompt.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		Displayed is the information regarding your date search.  The expenses that were earned between the dates you entered will appear here.  If no purchases were found for that date range, please refer to the View all Expenses page.
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
