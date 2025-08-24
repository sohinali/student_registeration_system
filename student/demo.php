<?php 
session_start();
if(!isset($_SESSION['user_id'])){
  echo "<script>window.location.href='error1.php';</script>";
}
include "boot.php";
$conn = mysqli_connect("localhost", "root", "", "project_db");
$user= $_SESSION['user_id'];

 $str="select * from student where id ='$user'";
$res= mysqli_query($conn,$str);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Portal</title>
  <!-- bootstrap 5 css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <!-- BOX ICONS CSS-->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  min-height: 100vh;
  background-color: #fff;
}

.side-navbar {
  width: 250px;
  height: 100%;
  position: fixed;
  margin-left: -300px;
  background-color: #100901;
  transition: 0.5s;
}

.nav-link:active,
.nav-link:focus,
.nav-link:hover {
  background-color: #ffffff26;
}

.my-container {
  transition: 0.4s;
}

.active-nav {
  margin-left: 0;
}

/* for main section */
.active-cont {
  margin-left: 250px;
}

#menu-btn {
  background-color: #100901;
  color: #fff;
  margin-left: -62px;
}

.my-container input {
  border-radius: 2rem;
  padding: 2px 20px;
}


  </style>
</head>

<body>
 
  <!-- Side-Nav -->
  <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100">
      <a href="#" class="nav-link h3 text-white my-2">
        Student Panel
      </a>
      <li style="color: white;" class="nav-link">
        <i class="bx bxs-dashboard"></i>
        <span class="mx-2">Home</span>
      </li>
      <li class="nav-link">
        <i class="bx bx-user-check"></i>
        <a href="sview.php" style="color: white; text-decoration: none;" ><span class="mx-2" >Edit</span></a>
      </li>
      <li style="color: white;" class="nav-link">
        <i class="bx bx-conversation"></i>
          <a href="contact.php" style="color: white; text-decoration: none;" ><span class="mx-2">Contact</span></a>
      </li>
      <li class="nav-link" style="color: white;">
        <i class="bx bx-conversation"></i>
        <a href="logout.php" style="color: white; text-decoration: none;" ><span class="mx-2">Logout</span></a>
      </li>

    </ul>

    <span href="#" class="nav-link h4 w-100 mb-5">
      <a href=""><i class="bx bxl-instagram-alt text-white"></i></a>
      <a href=""><i class="bx bxl-twitter px-2 text-white"></i></a>
      <a href=""><i class="bx bxl-facebook text-white"></i></a>
    </span>
  </div>

  <!-- Main Wrapper -->
  <div class="p-1 my-container active-cont">
    <!-- Top Nav -->
    <nav class="navbar top-navbar navbar-light bg-light px-5">
      <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
    </nav>
    <!--<p class="px-3">Responsive navigation sidebar built using <a class="text-dark" href="https://getbootstrap.com/">Bootstrap 5</a>.</p>-->
          <?php while ($row=mysqli_fetch_array($res)) { ?> 



<section class="vh-100" style="background-color:white;">
  <div class="container h-10">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-7">

       <center> <h4 class="text-black mb-4">STUDENT PROFILE 💻 </h4></center>

        <div class="card" style="border-radius:10px;">
          <div class="card-body">

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Full name</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" class="form-control form-control-lg" value="<?php echo $row['name']; ?>" readonly />

              </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Phone Number</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" class="form-control form-control-lg" value="<?php echo $row['mobile']; ?>" readonly />

              </div>
            </div>

<div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Age</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" class="form-control form-control-lg" value="<?php echo $row['age']; ?>" readonly />

              </div>
            </div>

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Email Address</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="email" class="form-control form-control-lg" placeholder="Email"value="<?php echo $row['email']; ?>" readonly  />

              </div>
            </div>

          

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">COURSE</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="course" class="form-control form-control-lg" placeholder="Email"value="<?php echo $row['course']; ?>" readonly  />

              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
   <?php } ?>
</section>



      <script src="sjquery.js"></script>
 <script src="student.js"></script>
 <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
   <script>
    var menu_btn = document.querySelector("#menu-btn");
var sidebar = document.querySelector("#sidebar");
var container = document.querySelector(".my-container");
menu_btn.addEventListener("click", () => {
  sidebar.classList.toggle("active-nav");
  container.classList.toggle("active-cont");
});

  </script>
         



</body>
<footer class="bg-body-tertiary text-center text-lg-start">
  <div class="text-center p-3" style="background-color:grey;"><b>
    © 2024 Copyright:</b>
    <a class="text-body" href="" style="text-decoration none"><b>Sohin Ali</b></a>
  </div>
</footer>
</html>
