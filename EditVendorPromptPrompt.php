<?php
session_start();
?>

<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>

<h1 align = "center">Edit Vendor</h1><br>

<h2 align = "center">Please enter the Vendor ID of the Vendor you would like to edit:</h2>


<form action = "EditVendorPrompt.php" method = "POST">

<div class = "inputBox">
<input type = "text" name = "Vend_ID" placeholder = "Vendor ID" required> <br><br>

<button class = "inputSubmit" type = "submit" name = "submit"> Submit </button>
</div>



<div><button class="submit" type="button" onclick="window.location.href='ManageVendors.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Edit Vendor page.  Here you can enter the information for a user you would like to add to the application.
                    <br><br>
                    
                    Here you are prompted for the Vendor ID of the vendor you would like to edit:  <br><br>
                    In the <b>Vendor ID</b> text box, enter the Vendor ID of the vendor you would like to edit.  You will then be taken to a page that will allow you to enter the new aspects of the vendor. <br><br>
                   
                    
                    
                   
  
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
