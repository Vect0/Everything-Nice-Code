<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>

<h1 align = "center">Add Vendor</h1><br>

<h2 align = "center">Please enter your vendor information:</h2>


<form action = "CreateVendor.php" method = "POST">

<div class = "inputBox">
<input type = "text" name = "Vend_Name" placeholder = "Vendor Name" required> <br><br>
<input type = "text" name = "Address" placeholder = "Address" required> <br><br>
<input type = "text" name = "City" placeholder = "City" required> <br><br>
<input type = "text" name = "State" placeholder = "State" required> <br><br>
<input type = "text" name = "ZIP" placeholder = "ZIP" required> <br><br>
<input type = "text" name = "Phone" placeholder = "Phone Number" required> <br><br>

<button class = "inputSubmit" type = "submit"> Submit </button>
</div>

<div><button class="submit" type="button" onclick="window.location.href='ManageVendors.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Create a Vendor page.  Here you can enter the information for a vendor you would like to add to your list of vendors.
                    <br><br>
                    
                    Here you are prompted for info pertaining to your new vendor:  <br><br>
                    In the <b>Vendor Name</b> text box, enter the name of the new vendor. <br><br>
                    In the <b>Address</b> text box, enter the address of the new vendor.  <br><br>
                    In the <b>City</b> text box, enter the city name of the new vendor.  <br><br>
                    In the <b>State</b> text box, enter the state of the new vendor.  <br><br>
                    In the <b>ZIP</b> text box, enter the ZIP code of the new vendor.   <br><br>
                    In the <b>Phone</b> text box, enter the phone number of the new vendor. <br><br>
                    
                    
                   
  
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
