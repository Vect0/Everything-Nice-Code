<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<h1 align="center">Users</h1>

<h2><u>Here are all of the current users:</u></h2><br>


<?php

$evdb = mysqli_connect("localhost", "twininga_wrdp1", "Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice");

$username = $_POST['username'];
$password = $_POST['password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$About = $_POST['about'];
$AdminStatus = $_POST['adminstatus'];




$sql = "
INSERT INTO user (Username, Password, Firstname, Lastname, About, AdminStatus) VALUES ('$username', '$password', '$first_name', '$last_name',
'$About', '$AdminStatus') ";

if(mysqli_query($evdb, $sql)){
    print "  .". "<br><br>";
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

<div><button class="submit" type="button" onclick="window.location.href='ManageUsers.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the the updated list of users after that last user you just added.  Your newly added user should appear here.                    <br><br>
                    
                    
                   
  
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
