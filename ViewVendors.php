<?php
session_start();
?>

<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">

<head>
<meta charset="UTF-8">
</head>
<body>
<h1 align="center">Vendors</h1>


<?php

$evdb = mysqli_connect("localhost", "twininga_wrdp1", "Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice");

$result = mysqli_query($evdb, "SELECT * FROM vendor");

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Vendor ID: " . $row["Vend_ID"]. " - Vendor Name: " . $row["Vend_Name"]. " - Address: " . $row["Address"].
    " - City: " . $row["City"].
		" - State: " . $row["State"]. " - ZIP: " . $row["Zip"]. " - Phone: " . $row["Phone"]. "<br><br>";}

?>


<div><button class="submit" type="button" onclick="window.location.href='ManageVendors.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the View Vendors page.  Displayed are all of the current vendors stored in the application along with the Vendor IDs that are associated with each.
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
