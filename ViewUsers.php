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
<h1 align="center">Users</h1><br>




<?php

$evdb = mysqli_connect("localhost", "twininga_wrdp1", "Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice");

$result = mysqli_query($evdb, "SELECT * FROM user");

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "User ID: " . $row["User_ID"]. " - Username: " . $row["Username"]. " - Password: " . $row["Password"].
		" - First: " . $row["Firstname"]. " - Last: " . $row["Lastname"]. " - About: " . $row["About"]. " - AdminStatus: ". $row["AdminStatus"].

		"<br><br>";
    }

?>
<div> <button class="Submit" type="button" onclick="window.location.href='ManageUsers.php'"> Back </div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the View Users page.  Displayed are all of the current users of the application along with the User IDs that are associated with each.
                    <br><br>
                    
                    
                   
  
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
