<?php

session_start();

$evdb = mysqli_connect("localhost", "twininga_wrdp1", "Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice");

 $_SESSION['Vend_ID'] = $_POST['Vend_ID'];   ?>


 <h2><u>Here is the current information for that vendor:</u></h2><br>

 <?php

 $result = mysqli_query($evdb, "SELECT * FROM vendor WHERE Vend_ID = '{$_SESSION['Vend_ID']}'");

     if (mysqli_num_rows($result) ==0) echo "No vendors were found for that vendor ID.";

     // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
         echo "Vendor ID: " . $row["Vend_ID"]. " - Vendor Name: " . $row["Vend_Name"]. " - Address: " . $row["Address"].
     " - City: " . $row["City"].
 		" - State: " . $row["State"]. " - ZIP: " . $row["Zip"]. " - Phone: " . $row["Phone"]. "<br><br>";
     }

?>


<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>


<h2 align = "center">Please enter the new user information:</h2>


<form action = "EditVendor.php" method = "POST">

<div class = "inputBox">
  <input type = "text" name = "Vend_Name" placeholder = "Vend_Name" required> <br><br>
  <input type = "text" name = "Address" placeholder = "Address" required> <br><br>
  <input type = "text" name = "City" placeholder = "City" required> <br><br>
  <input type = "text" name = "State" placeholder = "State" required> <br><br>
  <input type = "text" name = "ZIP" placeholder = "ZIP" required> <br><br>
  <input type = "text" name = "Phone" placeholder = "Phone" required> <br><br>

  <button class = "inputSubmit" type = "submit"> Submit </button>
  </div>

  <div><button class="submit" type="button" onclick="window.location.href='EditVendorPromptPrompt.php'"> Back </div>
  

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Edit Vendor page.  Here you can enter the new information for your vendor.
                    <br><br>
                    
                    Here you are prompted for new info pertaining to your vendor:  <br><br>
                    In the <b>Vendor Name</b> text box, enter the new name of the vendor. <br><br>
                    In the <b>Address</b> text box, enter the new address of the vendor.  <br><br>
                    In the <b>City</b> text box, enter the new city name of the vendor.  <br><br>
                    In the <b>State</b> text box, enter the new state of the vendor.  <br><br>
                    In the <b>ZIP</b> text box, enter the new ZIP code of the vendor.   <br><br>
                    In the <b>Phone</b> text box, enter the new phone number of the vendor. <br><br>
                    
                    
                   
  
  </span>
</div>


<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>

</form>



</html>
</body>
