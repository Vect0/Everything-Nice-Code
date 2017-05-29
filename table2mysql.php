<?php

$accounts = mysql_connect("localhost", "root") or die(mysql_error());     //MUST HAVE "LOCALHOST" AND "ROOT"

mysql_select_db("accounts", $accounts);


$sql = "CREATE TABLE users2
(
ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),
Username varchar(20),
Password varchar(20),
First varchar(20),
Last varchar(20)
)
";

if (mysql_query($sql, $accounts))
{
	echo "table created";
	
	
} else
{
	echo "error" . mysql_error();
	
};



?>