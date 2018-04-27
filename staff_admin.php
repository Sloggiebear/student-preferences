<?php 
include 'session.php';
include 'header.php';
?>
<nav class="navbar nav-tabs navbar-expand-lg navbar-light bg-light mb-4">
<img src="./images/ncad-logo.png" alt="NCAD" width="197" height="54"/>
<?php
if (isset($_SESSION['email']) || isset($_SESSION['password'])) {
	$email = $_SESSION['email'];
	$sql = "SELECT * FROM admins WHERE staff_email = '$email'";
	$query = mysqli_query($connection,$sql);	
	$result = mysqli_fetch_assoc($query);
	$first_name = $result['first_name'];
	$surname = $result['surname'];
	$staff_email = $result['staff_email'];
	echo "
	<ul class='navbar-nav mr-auto'>
		<li class='nav-item'><a class='nav-link' href='staff_admin.php'>Home</a></li>
		<li class='nav-item'><a class='nav-link' href='course_info.php'>Information</a></li>
	</ul>
	</div>Logged in as: ".$first_name." ".$surname." | ".$staff_email."<a class='btn btn-outline-dark ml-4' href='logout.php'>Logout</a></div>";
} 
?>
</nav>
<section id="main" class="container">
<div class="container">
<h3>Admin</h3>
<?php
// Provide Overview of number of students.
$sql = "SELECT * FROM `students`";
$query = mysqli_query($connection, $sql);
$rows = mysqli_num_rows($query);
echo ("No. of students registered on system: ".$rows);
echo ("<hr>");

// State how many students have submitted preferences so far
$sql = "SELECT * FROM `stud_prefs_course_id_1`";
$query = mysqli_query($connection, $sql);
$rows = mysqli_num_rows($query);
echo ("<h4>Elective 1</h4><p>No. of students who have submitted preferences for this project: ".$rows."</p>");
?>

<a href="#" class="btn btn-primary">Download Results as Excel File</a>
<a href="#" class="btn btn-outline-dark">View Outstanding Students</a>
<hr>
<?php
// State how many students have submitted preferences so far
$sql = "SELECT * FROM `stud_prefs_course_id_2`";
$query = mysqli_query($connection, $sql);
$rows = mysqli_num_rows($query);
echo ("<h4>Elective 2</h4><p>No. of students who have submitted preferences for this project: ".$rows."</p>");
?>
<a href="#" class="btn btn-primary">Download Results as Excel File</a>
<a href="#" class="btn btn-outline-dark">View Outstanding Students</a>

</div>
<?php include("footer.php"); ?>
