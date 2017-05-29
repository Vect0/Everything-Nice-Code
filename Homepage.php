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

<h1 align="center">Welcome to the Everything Nice homepage</h1>

<div class = "fart">

<button class="submit1" type="button" onclick="window.location.href='ManageInventory.php'"><span> Manage Inventory </span>
<button class="submit1" type="button" onclick="window.location.href='ManageVendors.php'"><span> Manage Vendors </span>
<button class="submit1" type="button" onclick="window.location.href='ManageFinances.php'"><span> Manage Finances </span>
<button class="submit1" type="button" onclick="window.location.href='LoginPagePrompt.php'"><span> Log Out </span>
</div><br><br>

<?php if(($_SESSION['AdminMarker']==1)) {  ?>



</form>


<br><div><button class="submit" type="button" onclick="window.location.href='AdminHomepage.php'"> Back </div>

<?php } ?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the homepage.  Here you can select buttons that will take you to different parts of the application.
                    <br><br>
                    
                    When selected, the buttons will take you to the following parts of the application:  <br><br>
                    If <b>Manage Inventory</b> is selected, you will be taken to a page that will allow you to perform different tasks to manipulate the inventory.  This includes adding, editing, and deleting inventory items. <br><br>
                    If <b>Manage Vendors</b> is selected, you will be taken to a page that will allow you to perform different tasks to manipulate all of the vendors you have on file.  This includes adding, editing, and deleting the current list of vendors. <br><br>
                    If <b>Manage Finances</b> is selected, you will be taken to a page that will allow you to view your expenses, revenues, and profits.  This includes viewing all of them as a whole, by dates, or a range of dates. <br><br>
                    If <b>Logout</b> is selected, you will be taken back to the login page.  From here you can either login again or login as a different user. <br><br>
                    
                    
                   
  
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
