<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
<title>Delete a vendor</title>
</head>
<body>

  <h1 align = "center">Delete a Vendor</h1><br>
  <h2 align = "center">Enter the ID of the Vendor you would like to delete:</h2><br>

<form action = "DeleteVendor.php" method = "POST">
<div class = "inputBox">


<input type = "text" name = "Vend_ID" placeholder = "Vendor ID" required> <br><br>



<button class = "inputSubmit" type = "submit"> Submit </button>
</div>
<div><button class="Submit" type="button" onclick="window.location.href='ManageVendors.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Delete a Vendor page. 
                    <br><br>
                    
                    Here you are prompted for the following info:  <br><br>
                    In the <b>Vendor ID</b> text box, enter the Vendor ID of the vendor you would like to delete.  This vendor will be deleted from the list of vendors. <br><br>
                  
                    
                    
                   
  
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
