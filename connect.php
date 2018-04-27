<?php
//create connection to the database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "elective_prefs";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test connection
if(mysqli_connect_errno()) {
	die("Database connection has failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
}
?>