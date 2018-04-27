<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
	<a class="brand mr-4" href="student_admin.php"><img src="./images/ncad-logo.png" alt="NCAD" width="150" height="45"/></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
  	<ul class='navbar-nav mr-auto'>
		<li class='nav-item'>
			<a class='nav-link' href='student_admin.php'>Home</a>
		</li>
		<li class='nav-item'>
			<a class='nav-link' href='course_info.php'>Information</a>
		</li>
	</ul>
	<div class="dropdown-divider"></div>
	<?php
	if (isset($_SESSION['email']) || isset($_SESSION['password'])) {
		$email = $_SESSION['email'];
		$sql = "SELECT * FROM students WHERE student_email = '$email'";
		$query = mysqli_query($connection,$sql);	
		$result = mysqli_fetch_assoc($query);
		$first_name = $result['first_name'];
		$surname = $result['surname'];
		$student_email = $result['student_email'];
		echo "
		<span class='navbar-text'>Logged in as: ".$first_name." ".$surname." | ".$student_email."<a class='btn btn-outline-dark ml-4' href='logout.php'>Logout</a></div>";
	} 
?>
	</div>
</nav>
<section id="main" class="container">