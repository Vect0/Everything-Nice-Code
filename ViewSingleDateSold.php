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


//echo "The first date is {$from_date} and the second date is {$to_date}";
}

$sql = " SELECT * FROM sales WHERE Sell_Date = '$date'";

$sql2 = "SELECT SUM(total) AS sum FROM sales WHERE Sell_Date = '$date' ";

// if(mysqli_query($evdb, $sql)){
//     print "  .". "<br><br>";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
// }

$result1 = mysqli_query($evdb, $sql2);    //total
$row1 = mysqli_fetch_assoc($result1);

$result = mysqli_query($evdb, $sql);

//$row = mysqli_fetch_row($result);


// if (mysqli_num_rows($result) ==0) echo "na";

?>

<h2><u>Items sold: </u></h2>

<?php



    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo " Sale ID ". $row["Sale_ID"]. " - Product Name: " . $row["Product_Name"]. " - Quantity Sold: ". $row["NumSold"].
        " - Sell Price: ". $row["SellPrice"]. " - Total: ". $row["total"]. " - Sell Date: ". $row["Sell_Date"].


         "<br><br>";}

?>

<br><br><br><br>
<?php

if (mysqli_num_rows($result)>0){
$summ = $row1['sum'];
echo "You sold a total of $".  $summ . " worth of inventory on " . $date . ".";
} else echo "No sales were found for that date."

?>

<br><br><br><br>
<div><button class="submit" type="button" onclick="window.location.href='ViewSingleDateSoldPrompt.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		Displayed is the information regarding your date search.  The revenues that were earned on the date you entered will appear here.  If no sales were found for that date, please refer to the View all Revenues page.
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
