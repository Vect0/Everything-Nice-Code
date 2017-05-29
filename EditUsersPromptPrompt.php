<?php
session_start();

if(($_SESSION['AdminMarker']==0)) {
header("Location: LoginPagePrompt.php");
}
?>

<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>

<h1 align = "center">Edit User</h1><br>

<h2 align = "center">Please enter the User ID of the User youd like to edit:</h2>


<form action = "EditUsersPrompt.php" method = "POST">

<div class = "inputBox">
<input type = "text" name = "User_ID" placeholder = "User ID" required> <br><br>

<button class = "inputSubmit" type = "submit" name = "submit"> Submit </button>
</div>



<div><button class="submit" type="button" onclick="window.location.href='ManageUsers.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Edit User page.  Here you can enter the information for a user you would like to add to the application.
                    <br><br>
                    
                    Here you are prompted for the user ID of the user youd like to edit:  <br><br>
                    In the <b>User ID</b> text box, enter the User ID of the user you would like to edit.  You will then be taken to a page that will allow you to enter the new aspects of the user. <br><br>
                   
                    
                    
                   
  
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
