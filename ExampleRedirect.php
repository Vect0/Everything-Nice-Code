<?php

switch($_GET['mytext'])
{
    case 'user':
        header('Location: CreateUserPrompt.php');
        break;
    case 'post':
        header('Location: POSTmessagePrompt.php');
        break;
    default:
        print "<p>Wrong code. Try again</p>";
        include('ExampleRedirectPrompt.php');
        break;
}

?>
