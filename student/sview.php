<?php 
$conn = mysqli_connect("localhost", "root", "", "project_db");
include "boot.php";
session_start();
if(!isset($_SESSION['user_id'])){
  echo "<script>window.location.href='error1.php';</script>";
}



$user= $_SESSION['user_id'];

 $str="select * from student where id ='$user'";
$res= mysqli_query($conn,$str);

?>
<?php include "boot.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student-Record</title>
	
	<style>
		button[type=submit]{
			width: 100px;
		}
	</style>
</head>
<body>
			    <?php while ($row=mysqli_fetch_array($res)) { ?> 
			        <form role="form" id="vform" method="post" action="">
			        <br style="clear:both">
			                    <h3 style="margin-bottom: 25px; text-align: center;">Update details</h3>
<section class="vh-100" style="background-color:white;">
	<form role="form" id="vform" method="post" action="">
  <div class="container h-10">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-7">

        <div class="card" style="border-radius:10px;">
          <div class="card-body">

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Full name</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" class="form-control form-control-lg"  id="vname"value="<?php echo $row['name']; ?>" />
                <span id="uname_error" style="color: black;">*</span>
                  <input type="hidden" class="form-control" id="vid" placeholder="Name" value="<?php echo $row['id']; ?>">
              </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Phone Number</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" class="form-control form-control-lg" id="vpn" value="<?php echo $row['mobile']; ?>" readonly />
                <span id="smobile_error" style="color: black;">*</span>

              </div>
            </div>

<div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">AGE</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" class="form-control form-control-lg" id="vage" value="<?php echo $row['age']; ?>"/>
                <span id="uage_error" style="color: black;">*</span>

              </div>
            </div>

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Email Address</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="email" class="form-control form-control-lg" id="vemail"placeholder="Email"value="<?php echo $row['email']; ?>" readonly  />
                <span id="semail_error" style="color: black;">*</span>

              </div>
            </div>

          

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">COURSE</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="course" class="form-control form-control-lg" id="vcourse"placeholder="Course"value="<?php echo $row['course']; ?>" readonly  />
                <span id="scourse_error" style="color: black;">*</span>

              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
    <br>
     <center><button type="submit" id="vBtn" class="btn btn-success pull-right">Update</button>
			        <button class="btn btn-danger"><a href="demo.php" style="text-decoration:none; color:white">Back </a></button>
			        <span id="vmsg"></span></center>
  </div>
  
  </section>
   </form>
    <?php } ?>

   

			<script src="sjquery.js"></script>
 <script src="student.js"></script>


</body>
<footer class="bg-body-tertiary text-center text-lg-start">
  <div class="text-center p-3" style="background-color:grey;"><b>
    © 2024 Copyright:</b>
    <a class="text-body" href="" style="text-decoration none"><b>Sohin Ali</b></a>
  </div>
</footer>

</html>
