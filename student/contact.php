<?php
include "boot.php";
$conn = mysqli_connect("localhost", "root", "", "project_db");
session_start();
if(!isset($_SESSION['user_id'])){
  echo "<script>window.location.href='error1.php';</script>";
}

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <!-- Link Favicon -->
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />

  <!-- Link CSS File  -->


  <!-- Link Font  -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

  <!-- Font Awesome licensed  -->
  <script src="https://kit.fontawesome.com/5b12999530.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <style>
    /* Add CSS for icon size and center alignment */
    .icons {
      display: flex;
      justify-content: center;
    }

    .icons a {
      margin: 0 10px; 
      font-size: 3rem; 
    }
  </style>
</head>
<body>
  <br><br>
  <div class="contact">
    <center><h1>Contact Me</h1>
    <div class="icons">
      <a href="https://www.linkedin.com/in/sohin-ali-528340230/"  style="text-decoration:none; color: blue;"><i class="fab fa-linkedin"></i></a>
      <a href="https://www.instagram.com/mr.shareef7575/" style="text-decoration:none;  color: red;"><i class="fab fa-instagram"></i></a>
      <a href="https://github.com/sohinali" style="text-decoration:none;  color: black;"><i class="fab fa-github"></i></a>
    </div>
    <br>
     <p class="px-3">Phone Number: <a class="text-dark" href="">7728868387</a></p>
      <p class="px-3">Gmail: <a class="text-dark" href="">sohinali786@gmail.com</a></p>
     

  </div></center>

</body>
<br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<footer class="bg-body-tertiary text-center text-lg-start">
  <div class="text-center p-3" style="background-color:grey;"><b>
    © 2024 Copyright:</b>
    <a class="text-body" href="" style="text-decoration none"><b>Sohin Ali</b></a>
  </div>
</footer>
</html>

