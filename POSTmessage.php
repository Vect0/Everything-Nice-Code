<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ( $username == 'Dallas' and $password == 'butt')
{
	echo 'Welcome ' . $username . '.';
	
} else
{
	echo 'Go away.';
	
}



?>