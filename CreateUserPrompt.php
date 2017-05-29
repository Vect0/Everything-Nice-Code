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
<title>Add User</title>
</head>
<body>

<h1 align = "center">Create a new user:</h1><br>


<form action = "CreateUser.php" method = "POST">

<div class = "inputBox">
<input type = "text" name = "username" placeholder = "Username" required> <br><br>
<input type = "text" name = "password" placeholder = "Password" required> <br><br>
 <input type = "text" name = "first_name"  placeholder = "First Name" required> <br><br>
<input type = "text" name = "last_name" placeholder = "Last Name" required> <br><br>
<input type = "text" name = "about" placeholder = "About"> <br><br>
<b>Should they be an admin? (0 for Non-Admin, 1 for Admin): </b> <input type = "text" name = "adminstatus"
 placeholder = "Admin Status" required> <br><br>


<button class = "inputSubmit" type = "submit"> Submit </button>
</div>
<div><button class="Submit" type="button" onclick="window.location.href='ManageUsers.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Create a User page.  Here you can enter the information for a user you would like to add to the application.
                    <br><br>
                    
                    Here you are prompted for info pertaining to your new user:  <br><br>
                    In the <b>Username</b> text box, enter the username you would like for the new user.  This is the username they will enter into the login page to login to the application. <br><br>
                    In the <b>Password</b> text box, enter the password you would like for the new user.  This is the password they will enter into the login page to login to the application. <br><br>
                    In the <b>First Name</b> text box, enter the first name of the new user.  <br><br>
                    In the <b>Last Name</b> text box, enter the last name of the new user.  <br><br>
                    In the <b>About</b> text box, you may enter any descriptive information you would like that pertains to the user.   <br><br>
                    In the <b>Admin Status</b> text box, enter a 1 if you would like the new user to be an admin and have access to the admin homepage as well as the ability to manage users.  Enter a 0 if youd like the new user to be a normal user without the ability to manage other users. <br><br>
                    
                    
                   
  
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
