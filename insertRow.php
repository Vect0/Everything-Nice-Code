<?php

$evdb = mysqli_connect("localhost", "twininga_wrdp1","Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice") or die (mysqli_error($evdb));

$username = $_POST['username'];
$password = $_POST['password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$About = $_POST['about'];




$sql = "
INSERT INTO users (Username, Password, Firstname, Lastname, About) VALUES ('$username', '$password', '$first_name', '$last_name', '$About')
";


$result = mysql_query("SELECT * FROM users");

    // output data of each row
    while($row = mysql_fetch_assoc($result)) {
        echo "id: " . $row["ID"]. " - Username: " . $row["Username"]. " - Password: " . $row["Password"].
		" - First: " . $row["Firstname"]. " - Last: " . $row["Lastname"]. " - About: " . $row["About"].


		"<br><br>";

    }


if(mysql_query($sql, $accounts)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($accounts);



}
