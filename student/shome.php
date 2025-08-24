<?php 
include "boot.php";
session_start();

if(!isset($_SESSION['user'])){
  echo "<script>window.location.href='error1.php';</script>";
}

 $user= $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>student-Home-page</title>
  <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            background-color:white;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }


    </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="shome.php" style="color: white;">Student Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="shome.php"style="color: white;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/home1.php"style="color: white;">View Information</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="logout.php"style="color: white;">Logout</a>
        </li>
    </div>
  </div>
</nav>


    <div class="container" style=" text-align: center;">
     <img class="image" src="image/images4.jpg" height="350px" width="550px" >
    </div> 
</div>



</body>
</html>

