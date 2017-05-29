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
<title>Delete Inventory</title>
</head>
<body>

  <h1 align = "center">Delete a user</h1><br>
  <h2 align = "center">Enter the User ID of the user you would like to delete:</h2><br>

<form action = "DeleteUser.php" method = "POST">
<div class = "inputBox">


<input type = "text" name = "User_ID" placeholder = "User ID" required> <br><br>



<button class = "inputSubmit" type = "submit"> Submit </button>
</div>

<div><button class="Submit" type="button" onclick="window.location.href='ManageUsers.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Delete a User page. 
                    <br><br>
                    
                    Here you are prompted for the following info:  <br><br>
                    In the <b>User ID</b> text box, enter the user ID of the user you would like to delete.  This user will be deleted from the list of users and will not be able to login to the application. <br><br>
                  
                    
                    
                   
  
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
