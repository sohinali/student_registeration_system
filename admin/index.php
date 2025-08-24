<?php
include "bootstrap.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index-Page</title>
	<style>
		body{
			background-color:#a5c2b7;
		}

	</style>

</head>

<body>
	<br>
		<div class="container">
			<div class="col-md-5" style="margin-left: 400px;">
			    <div class="form-area" >  
			    	<center>
			        <form role="form" id="form" method="post" action="">
			        <br style="clear:both">
			                    <h3 style="margin-bottom: 25px;">Admin Panel</h3>
			                    <br>
			    				<div class="form-group">
									<input type="text" class="form-control" id="name" placeholder="Username"  >
								</center>
									<span id="user_error" style="color: black;">*</span>
									<span id="user_incorrect" style="color: black;"></span>
									

									<br><br>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="password"
									 placeholder="password" >
									 <span id="pass_error" style="color: black;">*</span>
									 <span id="pass_incorrect" style="color: black;"></span>
									
									<br><br>
								</div>
							<center> <button type="submit" id="submit" class="btn btn-success pull-right">Login</button>
			      </center>
			        <div class="ms"></div></form></div></div></div>
</center>
<script src="jquery.js"></script>
<script src="ajax.js"></script>
</body>
</html>