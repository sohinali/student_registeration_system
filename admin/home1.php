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
	<title>Home-page</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="home1.php" style="color: white;">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home1.php"style="color: white;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php"style="color: white;">Registeration</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="logout1.php"style="color: white;">Logout</a>
        </li>
    </div>
  </div>
</ul></div></div>
</nav>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Record</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form role="form" method="post">
                    <div class="form-outline mb-4">
                        <input type="text" id="name" class="form-control form-control-sm" />
                        <label class="form-label small" for="name">Your Name</label>
                        <span id="tname_error" style="color: black;">*</span>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="username" class="form-control form-control-sm" />
                         <input type="hidden" id="sid" class="form-control form-control-sm" />
                        <label class="form-label small" for="username">Username</label>
                        <span id="tusername_error" style="color: black;">*</span>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="password" class="form-control form-control-sm" />
                        <label class="form-label small" for="password">Your Password</label>
                        <span id="tpassword_error" style="color: black;">*</span>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="pn" class="form-control form-control-sm" />
                        <label class="form-label small" for="pn">Phone Number</label>
                        <span id="tmobile_error" style="color: black;">*</span>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="email" class="form-control form-control-sm" />
                        <label class="form-label small" for="email">Your Email</label>
                        <span id="temail_error" style="color: black;">*</span>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="age" class="form-control form-control-sm" />
                        <label class="form-label small" for="age">Your Age</label>
                        <span id="tage_error" style="color: black;">*</span>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="course" class="form-control form-control-sm" />
                        <label class="form-label small" for="course">Your Course</label>
                        <span id="tcourse_error" style="color: black;">*</span>
                        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" name="submit" Value="Update" id="update" class="btn btn-primary">
            </div>
                    </div>
                    
                
            
            </form>
        </div></div>
    </div>
</div>




  <center>
<h3 class=" p-2">All Records</h3>
<br>
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




</center>


   

<script src="jquery.js"></script>
<script src="ajax.js"></script>

</body>
 <footer class="bg-body-tertiary text-center text-lg-start">
  <div class="text-center p-3" style="background-color:grey;"><b>
    © 2024 Copyright:</b>
    <a class="text-body" href="" style="text-decoration none"><b>Sohin Ali</b></a>
  </div>
</footer>
 
</html>


