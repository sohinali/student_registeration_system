<?php include "bootstrap.php";
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
	<title>View Page</title>
</head>
<body>
	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Record</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <center>
      	<div class="form-area" >  
			        <form role="form" method="post">
      	<div class="form-group">
									<div class="form-group">
									<input type="text" class="form-control" id="name" placeholder="Name" required value="">
									<input type="hidden" class="form-control" id="sid" placeholder="Name" required value="">
									
									<br>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="pn" required
									 placeholder="Phone Number" value="">
									 
									<br>
								</div>

								<div class="form-group">
									<input type="text" class="form-control" id="email" placeholder="Email" required value="">
									
									<br>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="age" required
									 placeholder="Age" value="">
									
									<br>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="course" required
									 placeholder="Course" value="">
									
									<br>
								</div>
			                    
  </center>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" name="submit" Value="Update" id="update" class="btn btn-primary" data-bs-dismiss="modal">
      </div>
    </div>
  </div>
</div>
</form>
 



	<center>
<h3 class="alert-warning p-2">Show  Information</h3>
<br><br>
<div class="container">
<table class="table">

<thead>

<tr>

<th scope="col">ID</th>

<th scope="col">Name</th>

<th scope="col">Mobile Number</th>

<th scope="col">Email </th>

<th scope="col">Age</th>

<th scope="col">Course</th>

<th scope="col">Username</th>

<th scope="col">password</th>


<th scope="col">Delete</th>
<th scope="col">Edit</th>
</tr>

</thead>
<tbody id="tbody">

	
</tbody>
</table>

</div>




<script src="jquery.js"></script>
<script src="ajax.js"></script>

</center>

</body>
</html>
