<?php 
include 'header.php'; 
include 'nav.php'; 

//Get the details for the course from the database.
$course_id = $_GET['course_id'];
$sql = "SELECT * FROM `course_details` WHERE `course_id` = '$course_id'";
$query = mysqli_query($connection,$sql);
$result = mysqli_fetch_array($query);
$course_title = $result['course_title'];
$start_date = $result['start_date'];
$end_date = $result['end_date'];
$pref_deadline = $result['pref_deadline'];

//Get the options for the course and load them into an array.
$sql = "SELECT * FROM `course_options` WHERE `course_id` = '$course_id'";
$query = mysqli_query($connection,$sql);	
	if (mysqli_num_rows($query) > 0) {
    	// output data of each row
    	while($row = mysqli_fetch_array($query)) {
			$choices[] = $row[1];
		}
	}
?>
<div class="container">
	<?php echo "<h3>".$course_title."</h3><p>Start date: ".date("d-m-Y", strtotime($start_date))." | End Date: ".date("d-m-Y", strtotime($end_date))."</p><p>Preferences must be submitted by ".date("d-m-Y", strtotime($pref_deadline)); ?>
	<form name="prefs" action="submit_choices.php<?php echo("?course_id=".$course_id); ?>" method="post"> 
		<div id="hide_me" class="d-block">
			<div class="form-group">
				<label for="choice">Options</label>
				<select id="choice" class="form-control">
					<?php
					//Output the choices as select options.
					foreach ($choices as $value) {
						echo "<option value=\"".$value."\">".$value."</option>";
					}
					?>
				</select>
			</div>
			<button class="btn btn-primary" id="add_button" type="button" onClick="collect_choice()">Add</button>
		</div>
		<div class="form-group">
			<ol id="picks" class="mt-3"></ol>
		</div>
		<button class="btn btn-default" id="submit_button" type="submit" disabled="disabled">Submit</button>
		<button class="btn btn-default-outline"id="reset_button" type="button" onClick="reset_choices()">Reset</button>
	</form>
</div>
<script type="text/javascript">

// Build an array from all of the options for the choice. 
var x = document.getElementById("choice");
var all_choices = [];
var i;
for (i = 0; i < x.length; i++) {
	all_choices.push(x.options[i].value); 
}

//Append each choice to the document in an ordered list for the user
function collect_choice() {
	var s = document.getElementById("choice");
	var e = s.options[s.selectedIndex].value;
	var el = document.getElementById('picks');
	el.innerHTML += "<li>" + e + "<input type='hidden' name='prefs[]' value='" + e + "'/></li>"; 
	eliminate();
	check_submit();
}

//Remove the selected option from the list.
function eliminate() {
	var s = document.getElementById("choice");
	var e = s.selectedIndex;
	s.remove(e);
}

//Check when the user has made all choices and activate the submit button.
function check_submit() {
	var s = document.getElementById("choice");
	if (s.length == 0) {
		document.getElementById("submit_button").disabled = false;
		document.getElementById("submit_button").className  = "btn btn-success";
		document.getElementById("hide_me").className  = "d-none";
	} else {
	console.log(s.length)
	}
}

//Reset all choices and relevant style classes.
function reset_choices() {
	var el = document.getElementById('picks');
	el.innerHTML = "";
	var el = document.getElementById('choice');
	el.innerHTML = "";
	for (i = 0; i < all_choices.length; i++) {
		el.innerHTML += "<option value=\"" + all_choices[i] + "\">" + all_choices[i] + "</option>";
	}
	document.getElementById("submit_button").disabled = true;
	document.getElementById("submit_button").className  = "btn btn-default";
	document.getElementById("hide_me").className  = "d-block";
}
</script>

<?php 
include 'footer.php'; 
?>