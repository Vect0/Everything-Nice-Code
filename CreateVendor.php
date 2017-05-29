<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>
<h1 align="center">Vendors</h1>

<h2><u>Here are all of the current vendors:</u></h2><br>


<?php

$evdb = mysqli_connect("localhost", "twininga_wrdp1", "Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice");

$Vend_Name = $_POST['Vend_Name'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$State = $_POST['State'];
$ZIP = $_POST['ZIP'];
$Phone = $_POST['Phone'];



$sql = "
INSERT INTO vendor ( Vend_Name, Address, City, State, ZIP, Phone) VALUES ( '$Vend_Name', '$Address',
 '$City', '$State', '$ZIP', '$Phone') ";

if(mysqli_query($evdb, $sql)){
    print "  .". "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
}


$result = mysqli_query($evdb, "SELECT * FROM vendor");

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Vendor ID: " . $row["Vend_ID"]. " - Vendor Name: " . $row["Vend_Name"]. " - Address: " . $row["Address"].
    " - City: " . $row["City"].
		" - State: " . $row["State"]. " - ZIP: " . $row["Zip"]. " - Phone: " . $row["Phone"]. "<br><br>";}

?>

<div><button class="submit" type="button" onclick="window.location.href='CreateVendorPrompt.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the the updated list of vendors after that last vendor you just added.  Your newly added vendor should appear here.                    <br><br>
                    
                    
                   
  
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
