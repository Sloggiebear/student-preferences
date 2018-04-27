<?php 
include 'session.php';
include 'header.php';
include 'nav.php';
?>
<div class="container">
<h3>Elective 1 Preferences</h3>
<?php
// ELECTIVE 1
// SQL query to check if preferences have already been submitted.
$sql = "SELECT * FROM `stud_prefs_course_id_1` WHERE `student_email` = '$_SESSION[email]'";
$query = mysqli_query($connection, $sql);
$rows = mysqli_num_rows($query);
$prefs = mysqli_fetch_array($query, MYSQLI_ASSOC);
if ($rows == 1) {
	echo ("<div class='alert alert-success' role='alert'><h5 class='alert-heading'>Well done!</h5><p>You have successfully submitted your preferences. You can change your mind up until the submission deadline.</div><ol class='list-group'>");
	for ($i = 1; $i < 11; $i++)
		{
		echo ("<li class='list-item ml-3'>".$prefs[$i]."</li>");
		}
	echo("</ol><form name='delete' action='delete_choices.php?course_id=1' method='POST'><button class='btn btn-danger mt-3' type='submit'>Delete and resubmit my preferences</button></form>");
	} else {
	echo("<div class='alert alert-danger' role='alert'>You have not submitted your preferences yet. If you do not submit preferences you will be randomly assigned.</div><a class='btn btn-primary' href='view_choices.php?course_id=1'>Submit my Preferences</a>");
	}
?>
<hr class="my-5"/>
<h2>Elective 2 Preferences</h2>
<?php
// ELECTIVE 2
// SQL query to check if preferences have already been submitted.
$sql = "SELECT * FROM `stud_prefs_course_id_2` WHERE `student_email` = '$_SESSION[email]'";
$query = mysqli_query($connection, $sql);
$rows = mysqli_num_rows($query);
$prefs = mysqli_fetch_array($query, MYSQLI_ASSOC);
if ($rows == 1) {
	echo ("<div class='alert alert-success' role='alert'><h5 class='alert-heading'>Well done!</h5><p>You have successfully submitted your preferences. You can change your mind up until the submission deadline.</div><ol class='list-group'>");
	for ($i = 1; $i < 11; $i++)
		{
		echo ("<li class='list-item ml-3'>".$prefs[$i]."</li>");
		}
	echo("</ol><form name='delete' action='delete_choices.php?course_id=2' method='POST'><button class='btn btn-danger mt-3' type='submit'>Delete and resubmit my preferences</button></form>");
	} else {
	echo("<div class='alert alert-danger' role='alert'>You have not submitted your preferences yet. If you do not submit preferences you will be randomly assigned.</div><a class='btn btn-primary' href='view_choices.php?course_id=2'>Submit my Preferences</a>");
	}
?>
</div>
<?php include("footer.php"); ?>
