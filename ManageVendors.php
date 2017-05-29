<?php
session_start();
?>

<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">

<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>

<h1 align="center">Vendor Management</h1><br><br><br><br><br>

<div class = "buttons">


<button class="submit1" type="button" onclick="window.location.href='CreateVendorPrompt.php'"><span> Add a vendor</span>
<button class="submit1" type="button" onclick="window.location.href='ViewVendors.php'"><span> View All Vendors</span>
<button class="submit1" type="button" onclick="window.location.href='EditVendorPromptPrompt.php'"><span> Edit a vendor</span>
<button class="submit1" type="button" onclick="window.location.href='DeleteVendorPrompt.php'"><span> Delete a vendor</span>




</div> <br><br><br><br>
<?php if(($_SESSION["AdminMarker"]==1)) {   ?>
<div><button class="submit" type="button" onclick="window.location.href='AdminHomepage.php'"> Back </div>
<?php }  ?>

<?php if(($_SESSION["AdminMarker"]==0)) {   ?>
<div><button class="submit" type="button" onclick="window.location.href='Homepage.php'"> Back </div>
<?php }  ?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Vendor Management page.  Here you can select buttons that will allow you to manipulate the different vendors you have recorded.
                    <br><br>
                    
                    When selected, the buttons will take you to the following parts of the application:  <br><br>
                    If <b>Create a Vendor</b> is selected, you will be taken to a page that will allow you to add a new vendor to the application. <br><br>
                    If <b>View Vendor</b> is selected, you will be shown a list of all of the current vendors you have recorded. <br><br>
                    If <b>Edit a Vendor</b> is selected, you will be taken to a page that will allow you to change the different aspects of a vendor. <br><br>
                    If <b>Delete a Vendor</b> is selected, you will be taken to a page that will allow you to delete a vendor from the application, by Vendor ID. <br><br>
                    
                    
                   
  
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
