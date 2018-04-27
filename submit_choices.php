<?php
session_start(); // Starting Session
require 'connect.php';

$course_id = $_GET['course_id'];

$query = "INSERT INTO `stud_prefs_course_id_".$course_id."` (`student_email`, `course_id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`) VALUES ('".$_SESSION['email']."', '$course_id', '"
.$_POST['prefs']['0']."', '"
.$_POST['prefs']['1']."', '"
.$_POST['prefs']['2']."', '"
.$_POST['prefs']['3']."', '"
.$_POST['prefs']['4']."', '"
.$_POST['prefs']['5']."', '"
.$_POST['prefs']['6']."', '"
.$_POST['prefs']['7']."', '"
.$_POST['prefs']['8']."', '"
.$_POST['prefs']['9']."')";


mysqli_query($connection, $query);
header("location: student_admin.php"); // Redirecting To overview Page
?>
