<?php 
include('header.php');
?>

<div class="container-fluid pt-5">
	<div class="row no-gutters justify-content-center" style="box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.7), box-shadow:0 -4px -8px 0 rgba(0, 0, 0, 0.7)"">
			<div class="col-sm col-lg-4 p-4 pink-trans">
				<h2 class="welcome-header white">Welcome</h2>
				<h4 class="sub-header mb-4">1<sup>st</sup> Year Studies</h4>
				<p class="white" style="font-size: 13px;">It’s time to select your preferences for the upcoming elective projects. Exciting huh? Please sign in to get started.</p>
				<img src="./images/ncad-logo-white.png" alt="NCAD" class="mt-5">
			</div>
  			
  			<div class="col-sm col-lg-4 px-5 py-4 dark-pink-trans">
			<form name="login" action="login.php" method="post" >
				<div class="form-group mb-4">
					<label for="email" class="d-none">Student E-mail</label>
					<div class="input-group mb-4">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">&#x2709;</span>
						</div>
						<input class="form-control py-2" name="email" id="email" type="email" size="30" placeholder="Student E-mail" />
	    			</div>
					<label for="password" class="d-none">Password</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">&#x2714;</span>
						</div>
						<input class="form-control py-2" name="password" id="password" type="password" size="30" placeholder="Password" />
	    			</div>
				</div>
				<input class="btn btn-dark-pink" type="submit" value="Login" alt="Submit" title="Submit" name="submit"/>
				<a class="btn btn-white" data-toggle="collapse" href="#collapse_forgot" role="button" aria-expanded="false" aria-controls="collapse_forgot">
				<span id="forgot">Forgot password?</span></a>
				<div class="collapse" id="collapse_forgot">
					<div class="card card-body mt-4 white dark-pink-trans">
					Your password is the same one you use to login to your NCAD student email account. If you have forgotten your password you will need to contact the NCAD IT Support to retrieve it.
					</div>
				</div>     
			</form>
			<?php 
				if (isset($_GET['login'])) {
					echo("<div class='alert alert-danger mt-4'>Student email or password entered incorrectly</div>");
				} else if (isset($_GET['loggedout'])) {
					echo("<div class='alert alert-success mt-4'>You have been logged out</div>");
				}
			?>
  			</div>
		
	</div>
</div>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


