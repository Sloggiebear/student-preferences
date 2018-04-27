<?php 
include('header.php');
?>

<div class="bgimage pt-5">

	<div id="loginform" class="container">
	<h2>Staff Admin</h2>
		<form name="login" action="admin_login.php" method="post" >
			<div class="form-group">
				<label for="email" class="d.none">Staff E-mail</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">&#x2709;</span>
					</div>
					<input class="form-control" name="email" id="email" type="email" size="30" placeholder="surnameinitial@staff.ncad.ie" />
    </div>
	
	
	
				<label for="password">Password</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">&#x2714;</span>
					</div>
					<input class="form-control" name="password" id="password" type="password" size="30" placeholder="Password" />
    </div>
	
	
			</div>
			<input class="btn btn-primary pull-right" type="submit" value="Submit" alt="Submit" title="Submit" name="submit"/>            
		</form>
		<?php 
			if ($_GET['login']) {
				echo("<div class='alert alert-danger mt-4'>Staff email or password entered incorrectly</div>");
			} else if ($_GET['loggedout']) {
				echo("<div class='alert alert-success mt-4'>You have been logged out</div>");
			}
		?>
		<p id="forgot">Forgot password?</p>
	</div>
	
</div>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


