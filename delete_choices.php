<?php
session_start(); // Starting Session
require 'connect.php';

$course_id = $_GET['course_id'];

$query = "DELETE FROM `stud_prefs_course_id_".$course_id."` WHERE `student_email` = '$_SESSION[email]'";
mysqli_query($connection, $query);
header("location: student_admin.php"); // Redirecting To Other Page
?>
