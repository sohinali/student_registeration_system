<?php
include "bootstrap.php";
session_start();

if(!isset($_SESSION['user'])){
  echo "<script>window.location.href='error.php';</script>";
}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	
	<style>
		button[type=submit]{
			width: 100px;
		}

		body{
			background-color: #a5c2b7;
		}
	</style>
</head>
<body>
		<div class="container">
			<div class="col-md-5" style="margin-left: 400px;">
			    <div class="form-area" >  
			        <form role="form" id="myform" method="post" action="">
			        <br style="clear:both">
			                    <h3 style="margin-bottom: 25px; text-align: center;">Register Form</h3>
			    				<div class="form-group">

			    					 <span id="div"></span>
			    					<div class="form-group">
									<input type="text" class="form-control" id="ruser"
									 placeholder="Username" value="">
									 <span id="euser"></span>
									
									<br>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="rpass" 
									 placeholder="password" value="">
								<span id="epass"></span>
									<br>
								</div>
								<input type="text" class="form-control" id="rname" placeholder="Name" value="">
									<input type="hidden" class="form-control" id="stuid" placeholder="Name" value="">
								 <span id="ename"></span>
									<br>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="rmobile"
									 placeholder="Phone Number" value="">
									  <span id="emobile"></span>
								
									<br>
								</div>

								<div class="form-group">
									<input type="email" class="form-control" id="remail" placeholder="Email"value="">
								 <span id="eemail"></span>
									<br>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="rage"
									 placeholder="Age" value="">
									 <span id="eage"></span>
									
									<br>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="rcourse"
									 placeholder="Course" value="">
									 <span id="ecourse"></span>
									
									<br>
								</div>
			                    <br>
			            
			        <button type="submit" id="Save" class="btn btn-success pull-right">Save</button>
			        <button class="btn btn-danger"><a href="home1.php" style="text-decoration:none; color:white">Back to Home</a></button>
			        <span id="sohin"></span>
			        </form>
			    </div>
			   
			</div>
			</div>

			<script src="jquery.js"></script>
 <script src="ajax.js"></script><br><br><br><br>
			<footer class="bg-body-tertiary text-center text-lg-start">
  <div class="text-center p-3" style="background-color:grey;"><b>
    © 2024 Copyright:</b>
    <a class="text-body" href="" style="text-decoration none"><b>Sohin Ali</b></a>
  </div>
</footer>



</body>
</html>