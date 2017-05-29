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

if(isset($_POST['date'])) {

$date = $_POST['date'];


}



?>

<h2><u>Items ordered: </u></h2>

<?php




$sql06 = mysqli_query($evdb, " SELECT orders.Order_ID, product_line.Productline_ID, product_line.Product_ID, product_line.Vend_ID,
  product_line.NumBought, product_line.BuyPrice, product_line.BoughtTotal, orders.order_date
FROM orders
INNER JOIN product_line ON orders.order_ID = product_line.order_ID WHERE orders.order_date = '$date'
");

$sql07 = mysqli_query($evdb, " SELECT orders.Order_ID, product_line.Productline_ID, product_line.Product_ID, product_line.Vend_ID,
  product_line.NumBought, product_line.BuyPrice, product_line.BoughtTotal, orders.order_date, SUM(product_line.BoughtTotal) AS Sum
FROM orders
INNER JOIN product_line ON orders.order_ID = product_line.order_ID WHERE orders.order_date = '$date'
");




//$sql2 = "SELECT SUM(boughtTotal) AS sum FROM product_line WHERE Sell_Date = '$date' ";



//$result1 = mysqli_query($evdb, $sql2);    //total
$row1 = mysqli_fetch_assoc($sql07);



    while($row = mysqli_fetch_assoc($sql06)) {
        echo "Order ID ". $row["Order_ID"] . " - Product ID: " . $row["Product_ID"] .
        " - Vendor ID: " . $row["Vend_ID"] ." - Number bought: " . $row["NumBought"] . " - Buy Price: " . $row["BuyPrice"] .
        " - Total: " . $row["BoughtTotal"] . " - Date ordered: " . $row["order_date"] .


         "<br><br>";}

         if (mysqli_num_rows($sql06)==0) echo "No purchases were found for that date.";





         ?>

         <h2><u>Items Sold: </u></h2>

         <?php


         $sql11 = " SELECT * FROM sales WHERE Sell_Date = '$date'";

         $sql12 = "SELECT SUM(total) AS sum1 FROM sales WHERE Sell_Date = '$date' ";

         // if(mysqli_query($evdb, $sql)){
         //     print "  .". "<br><br>";
         // } else{
         //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
         // }

         $outcome1 = mysqli_query($evdb, $sql12);    //total
         $row11 = mysqli_fetch_assoc($outcome1);

         $outcome = mysqli_query($evdb, $sql11);

         //$row = mysqli_fetch_row($result);


         // if (mysqli_num_rows($result) ==0) echo "na";


             // output data of each row
             while($row = mysqli_fetch_assoc($outcome)) {
                 echo "Sale ID ". $row["Sale_ID"]. " - Product Name: " . $row["Product_Name"]. " - Quantity Sold: ". $row["NumSold"].
                 " - Sell Price: ". $row["SellPrice"]. " - Total: ". $row["total"]. " - Sell Date: ". $row["Sell_Date"].


                  "<br><br>";}

                     if (mysqli_num_rows($outcome)==0) echo "No Sales were found for that date.";

?>

<br><br><br><br>
<?php

if (mysqli_num_rows($sql06)>0 && (mysqli_num_rows($outcome) ==0) ){
$summ = $row1['Sum'];
echo "You purchased a total of $".  $summ . " worth of inventory on " . $date . ".  ";
} else if(mysqli_num_rows($sql06)>0 && (mysqli_num_rows($outcome) >0)){
    $summ = $row1['Sum'];
    $summ1 = $row11['sum1'];

    echo "You purchased a total of $" . $summ . " and sold a total of $" . $summ1 . " worth of inventory on " . $date . ".  <br><br>";
} else echo " ";

if (mysqli_num_rows($outcome)>0 && (mysqli_num_rows($sql06) ==0) ){
$summ1 = $row11['sum1'];
echo "  You sold a total of $".  $summ1 . " worth of inventory on " . $date . ".";
} else echo " ";


if(($summ - $summ1) >= 0){
  if(mysqli_num_rows($sql06)>0 && (mysqli_num_rows($outcome) >0)) echo "Your profit for " . $date . " is $" . ($summ - $summ1) . ". ";
} else if(($summ - $summ1) < 0) {
  if(mysqli_num_rows($sql06)>0 && (mysqli_num_rows($outcome) >0)) echo "Your loss for " . $date . " is $" . (($summ - $summ1)*-1) . ". ";
}





?>

<br><br><br><br>
<div><button class="submit" type="button" onclick="window.location.href='ViewSingleDateProfitPrompt.php'"> Back </div>

<br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		Displayed is the information regarding your date search.  The profit or loss that was recorded on that day will appear here. 
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
