<?php
	session_start();
?>
	<!DOCTYPE html>
		<html>
		    <head>
		      <!--Import Google Icon Font-->
		      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		      <!--Import materialize.css-->
		      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

		      <!--Let browser know website is optimized for mobile-->
		      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		    </head>

		    <body>
		    	<div class="container">
			        <div class="row">
					    <form class="col s12" id="frm">
					      <div class="row">
					      	<div id="fbid"></div>
					        <div class="input-field col s6">
					          <input value="<?php echo $_SESSION['FULLNAME'];?>" placeholder="Placeholder" id="full_name" type="text" class="validate" name="name">
					          <label for="full_name">Name</label>
					        </div>
					        <div class="input-field col s6">
					          <input value="<?php echo $_SESSION['EMAIL'];?>" id="email" type="text" class="validate" name="email">
					          <label for="email">Email</label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col s6">
					          <input  placeholder="phone" id="phone" type="text" class="validate" name="phone">
					          <label for="phone">Phone</label>
					        </div>
					        <div class="input-field col s6">
					          <input  id="dob" type="dob" class="validate" name="dob">
					          <label for="dob">Date Of Birth</label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col s6">
					        	<label for="gender">Gender</label>
					          <p>
							    <input class="with-gap" name="group3" type="radio" id="test5" value="M" checked />
							    <label for="test1">Male</label>
							  </p>
							  <p>
							    <input class="with-gap" name="group3" type="radio" id="test5" value="F"/>
							    <label for="test2">Female</label>
							  </p>
					        </div>
					      </div>
					      <input type="hidden" name="fbid" value="<?php echo $_SESSION['FBID'];?>">
					      <div class="row">
					      	<div class="col s6">
					      		<button class="btn waves-effect waves-light" type="submit" id="submit" name="action">Submit
								</button>
					      	</div>
					      </div>
					    </form>
					</div>
			    </div>
		      	<!--Import jQuery before materialize.js-->
		      	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		      	<script type="text/javascript" src="../js/materialize.min.js"></script>
		      	<script>
		      	$(document).ready(function() {
		      	  $('#submit').on('click', function(event) {
		      	  	event.preventDefault();
		      	  	var data = $('#frm').serializeArray();
		      	  	console.log(data);
		      	  	$.ajax({
		      			url: 'http://api.foodtalkindia.com/user',
		      			type: 'POST',
    					contentType: 'application/json',
    					dataType: 'json',
		      			data: JSON.stringify({name: data[0]['value'],
		      					email: data[1]['value'],
		      					contact: data[2]['value'],
		      					dob: data[3]['value'],
		      					gender: data[4]['value'],
		      					facebook_id: data[5]['value']})
		      		})
		      		.done(function(response) {
		      			console.log(response);
		      		})
		      		.fail(function(response) {
		      			console.log(response);
		      		})
		      		.always(function() {
		      			console.log("complete");
		      		});
		      	  });
		      		
		      	});
		      	</script>
		    </body>
		</html>
