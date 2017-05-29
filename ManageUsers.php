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
<title>Add Record Form</title>
</head>
<body>

<h1 align="center">User Management</h1><br><br><br><br><br>

<div class = "buttons">


<button class="submit1" type="button" onclick="window.location.href='CreateUserPrompt.php'"><span> Create a User</span>
<button class="submit1" type="button" onclick="window.location.href='ViewUsers.php'"><span> View Users</span>
  <button class="submit1" type="button" onclick="window.location.href='EditUsersPromptPrompt.php'"><span> Edit a User</span>
<button class="submit1" type="button" onclick="window.location.href='DeleteUserPrompt.php'"> <span>Delete a User</span>

</div><br><br><br><br>

<div><button class="submit" type="button" onclick="window.location.href='AdminHomepage.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the User Management page.  Here you can select buttons that will allow you to manipulate the users that have access to the application.
                    <br><br>
                    
                    When selected, the buttons will take you to the following parts of the application:  <br><br>
                    If <b>Create a User</b> is selected, you will be taken to a page that will allow you to add a new user to the application. <br><br>
                    If <b>View Users</b> is selected, you will be shown a list of all of the users that have access to the application. <br><br>
                    If <b>Edit a User</b> is selected, you will be taken to a page that will allow you to change the different aspects of a user. <br><br>
                    If <b>Delete a User</b> is selected, you will be taken to a page that will allow you to delete a user from the application, by User ID. <br><br>
                    
                    
                   
  
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
