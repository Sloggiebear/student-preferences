<?php
session_start(); // Starting Session

// Define $email and $password
$email = $_POST['email'];
$password = $_POST['password'];
$secure_password = password_hash($password, PASSWORD_DEFAULT);

// Establishing Connection with database by passing server_name, user_id,  password and database name.
$connection = mysqli_connect("localhost", "root", "", "elective_prefs");

// To protect against MySQL injection
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($connection, $email);
$password = mysqli_real_escape_string($connection, $password);

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection, "SELECT * FROM admins WHERE staff_email = '$email' AND password = '$password'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
	$_SESSION['email']=$email; // Initializing Session
	$_SESSION['isLogged']=true; // Setting session check
	$user = mysqli_fetch_array($query, MYSQLI_ASSOC); //including user information in the session
	$_SESSION['first_name']=$user['first_name'];
	$_SESSION['surname']=$user['surname'];
	header("location: staff_admin.php"); // Redirecting To Other Page
} else {
	$error = "Username or password is invalid";
	header("location: admin_index.php?login=error"); // Redirecting To Other Page
	exit();
}
mysqli_close($connection); // Closing Connection
?>