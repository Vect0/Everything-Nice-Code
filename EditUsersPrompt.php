<?php

session_start();

if(($_SESSION['AdminMarker']==0)) {
header("Location: LoginPagePrompt.php");
}

$evdb = mysqli_connect("localhost", "twininga_wrdp1", "Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice");

 $_SESSION['User_ID'] = $_POST['User_ID'];   ?>


 <h2><u>Here is the current information for that user:</u></h2><br>

 <?php

 $result = mysqli_query($evdb, "SELECT * FROM user WHERE User_ID = '{$_SESSION['User_ID']}'");

    if (mysqli_num_rows($result) ==0) echo "No users were found for that user ID.";



     // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
         echo "User ID: " . $row["User_ID"]. " - Username: " . $row["Username"]. " - Password: " . $row["Password"].
 		" - First: " . $row["Firstname"]. " - Last: " . $row["Lastname"]. " - About: " . $row["About"]. " - AdminStatus: ". $row["AdminStatus"].

 		"<br><br>";
     }




?>


<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>


<h2 align = "center">Please enter the new user information:</h2>


<form action = "EditUsers.php" method = "POST">

<div class = "inputBox">
  <input type = "text" name = "username" placeholder = "Username" required> <br><br>
  <input type = "text" name = "password" placeholder = "Password" required> <br><br>
  <input type = "text" name = "firstname"  placeholder = "First Name" required> <br><br>
  <input type = "text" name = "lastname" placeholder = "Last Name" required> <br><br>
  <input type = "text" name = "about" placeholder = "About"> <br><br>
  <b> (0 for Non-Admin, 1 for Admin): </b> <input type = "text" name = "adminstatus"
   placeholder = "Admin Status" required> <br><br>


<button class = "inputSubmit" type = "submit"> Submit </button>
</div>

<div><button class="submit" type="button" onclick="window.location.href='EditUsersPromptPrompt.php'"> Back </div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Edit User page.  Here you can enter the new information for one of your users.
                    <br><br>
                    
                    Here you are prompted for the info youd like to have for the selected user:  <br><br>
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
