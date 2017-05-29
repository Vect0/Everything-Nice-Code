<?php
session_start();

$_SESSION["AdminMarker"]=0;
 ?>


<html>

<link rel="stylesheet" type="text/css" href="Loginc.css">

<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>

<h1 align="center">Login</h1>


<div class = "sign_in">
<form action = "LoginPage.php" method = "POST">
<b>Username: </b> <input type = "text" name = "username" required> <br><br>
<b>Password: </b> <input type = "text" name = "password" required> <br><br>



<button class = "submit" type = "submit"> Login </button>

</div>
</form>



</html>
</body>
