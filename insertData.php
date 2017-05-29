<?php

$accounts = mysql_connect("localhost", "root") or die (mysql_error());		//MUST HAVE "LOCALHOST" AND "ROOT"

mysql_select_db("accounts", $accounts);

$sql = "
INSERT INTO users2 (Username, Password, First, Last) VALUES ('Chris', 'pass123', 'Chris', 'Johnson')

";

mysql_query($sql, $accounts);