<?php
include "boot.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student-Register</title>
	
	<style>
		button[type=submit]{
			width: 100px;
		}
	</style>
</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

             <form role="form" id="mysform" method="post" action="">
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="sname"  class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                  <span id="sname_error" style="color: black;">*</span>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="Suser" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Username</label>
                  <span id="suser_error" style="color: black;">*</span>
                </div>
                 <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="Spass"  class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <span id="spass_error" style="color: black;">*</span>
                </div>
                 <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="Spn"  class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Mobile Number</label>
                  <span id="smobile_error" style="color: black;">*</span>
	                </div>


                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" id="Semail"  class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                <span id="semail_error" style="color: black;">*</span>
                </div>
 					

 					<div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="Sage" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Age</label>
                   <span id="sage_error" style="color: black;">*</span>
	                </div>

               
                

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="Scourse"  class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Your Course </label>
                  <span id="scourse_error" style="color: black;">*</span>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="button"
                    data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" id="Btn">Register</button>
                </div>
                <div id="sohin"></div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="index.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

</section>
			<script src="sjquery.js"></script>
 <script src="student.js"></script>


</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="bg-body-tertiary text-center text-lg-start">
  <div class="text-center p-3" style="background-color:grey;"><b>
    © 2024 Copyright:</b>
    <a class="text-body" href="" style="text-decoration none"><b>Sohin Ali</b></a>
  </div>
</footer>

</html>