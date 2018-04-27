<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: index.php?loggedout=true"); // Redirecting To Home Page
}
?>