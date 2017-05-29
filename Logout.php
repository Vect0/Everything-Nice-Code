<?php
session_start();

$evdb = mysqli_connect("localhost", "twininga_wrdp1", "Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice");


unset($_SESSION['AdminMarker']);
session_destroy();



header('Location: LoginPagePrompt.php');



 ?>
