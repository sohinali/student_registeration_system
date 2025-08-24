<?php
include "boot.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index-Page</title>
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
              <h2 class="text-uppercase text-center mb-5">Login Form</h2>

             <form role="form" id="rform" method="post" action="">
                <center><select name="usertype" id="usertype">
                   <option value="">select</option>
              <option value="admin">admin</option>
            <option value="student">student</option>
              </select><br></center>
              <br>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="sname"  name ="user" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Username</label>
                  <span id="Suser_error" style="color: black;">*</span>
                </div>
                 <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="spassword" name="password"  class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <span id="Spass_error" style="color: black;">*</span>
                </div>
                   <div class="d-flex justify-content-center">
                  <button type="button"
                    data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"id="Submit_btn" name="login">Login</button>
                </div>
                <div class="smsg"></div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="sregister.php"
                    class="fw-bold text-body"><u>Register here</u></a></p>

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
<footer class="bg-body-tertiary text-center text-lg-start">
  <div class="text-center p-3" style="background-color:grey;"><b>
    © 2024 Copyright:</b>
    <a class="text-body" href="" style="text-decoration none"><b>Sohin Ali</b></a>
  </div>
</footer>
</html>
