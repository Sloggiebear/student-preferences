<?php
session_start(); // Starting Session
include ('connect.php');

// Define $email and $password
$email = $_POST['email'];
$password = $_POST['password'];

//password hashing must match IT password hashing format, talk to John about encyprtion method already used on student accounts and implement here. 
//$secure_password = password_hash($password, PASSWORD_DEFAULT);

// To protect against MySQL injection
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($connection, $email);
$password = mysqli_real_escape_string($connection, $password);

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection, "SELECT * FROM students WHERE student_email = '$email' AND password = '$password'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
	$_SESSION['email']=$email; // Initializing Session
	$_SESSION['isLogged']=true; // Setting session check
	$user = mysqli_fetch_array($query, MYSQLI_ASSOC); //including user information in the session
	$_SESSION['first_name']=$user['first_name'];
	$_SESSION['surname']=$user['surname'];
	header("location: student_admin.php"); // Redirecting To admin page
} else {
	$error = "Username or password is invalid";
	header("location: index.php?login=error"); // Redirecting To index.php with error
	exit();
}
mysqli_close($connection); // Closing Connection
?>