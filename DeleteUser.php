<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>
<h1 align="center">Users</h1>

<h2><u>Here is the updated user list:</u></h2><br>


<?php

$evdb = mysqli_connect("localhost", "twininga_wrdp1", "Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice");

$User_ID = $_POST['User_ID'];
// $Description = $_POST['Description'];
// $Quantity = $_POST['Quantity'];
// $Vendor = $_POST['Vendor'];
// $BuyPrice = $_POST['BuyPrice'];
// $SellPrice = $_POST['SellPrice'];

$sql = "DELETE FROM user WHERE User_ID = '$User_ID'";


if(mysqli_query($evdb, $sql)){
    print " ".  "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
}


$result = mysqli_query($evdb, "SELECT * FROM user");

  

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "User ID: " . $row["User_ID"]. " - Username: " . $row["Username"]. " - Password: " . $row["Password"].
		" - First: " . $row["Firstname"]. " - Last: " . $row["Lastname"]. " - About: " . $row["About"]. " - AdminStatus: ". $row["AdminStatus"].

		"<br><br>";
    }
?>

<div><button class="submit" type="button" onclick="window.location.href='DeleteUserPrompt.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the the updated list of users after that last user you just deleted.                     <br><br>
                    
                    
                   
  
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
