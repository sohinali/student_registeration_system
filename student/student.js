$(document).ready(function(){

    const delayTime = 1000;

function redirectToNewPage() {
       window.location.href = "demo.php";
}
function redirectNewPage() {
       window.location.href = "index.php";
}
function redirectToPage() {
       window.location.href = "shome.php";
}
function RefereshNewPage() {
       location.reload();
}

const validateUser = (username) => {
   return username.match( 
    /^[a-z0-9_]{4,8}$/

    );
};

const validatePass = (password) => {
   return password.match( 
    /^[a-zA-Z0-9_]{4,8}$/

    );
};

const validateName = (name) => {
  return name.match(
            /^[a-zA-Z\s]+$/
  );
};

const validateEmail = (email) => {
  return email.match(
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  );
};


	$("#Btn").click(function (e) {
	e.preventDefault();
	var name =$("#sname").val();
	var username =$("#Suser").val();
	var password =$("#Spass").val();
	var phone =$("#Spn").val();
	var email =$("#Semail").val();
	var age =$("#Sage").val();
	var course =$("#Scourse").val();

    $('#sname_error, #suser_error, #spass_error, #smobile_error,semail_error,sage_error,scourse_error').html('');



    if (name === "") {
        $('#sname_error').html('**The name must be filled');
        $('#sname_error').css('color', 'red');
        return false;
     } else if (!validateName(name)) {
        $('#sname_error').html('**The name should be alphabatic only');
        $('#sname_error').css('color', 'red');
        return false;
    }


     if (username === "") {
        $('#suser_error').html('**The username must be filled');
        $('#suser_error').css('color', 'red');
        return false;
    }else if (!validateUser(username)) {
        $('#suser_error').html('**Only small Alphabets, Numbers and Underscore and between 4 to 8 characters ');
        $('#suser_error').css('color', 'red');
        return false;
    }

     if (password === "") {
        $('#spass_error').html('**The password must be filled');
        $('#spass_error').css('color', 'red');
        return false;
    }else if (!validatePass(password)) {
        $('#spass_error').html('**Only Alphabets, Numbers and Underscore and between 4 to 8 characters ');
        $('#spass_error').css('color', 'red');
        return false;
    }


     if (phone === "") {
        $('#smobile_error').html('**The mobile number must be filled');
        $('#smobile_error').css('color', 'red');
        return false;
    } else if (phone.length !== 10) {
        $('#smobile_error').html('**Must be 10 Digits');
        $('#smobile_error').css('color', 'red');
        return false;
    } else if (!$.isNumeric(phone)) {
        $('#smobile_error').html('**This field cannot contain letters');
        $('#smobile_error').css('color', 'red');
        return false;
    }

    if (email === "") {
        $('#semail_error').html('**The Email must be filled');
        $('#semail_error').css('color', 'red');
        return false;
    } else if (!validateEmail(email)) {
        $('#semail_error').html('**The Email is invalid');
        $('#semail_error').css('color', 'red');
        return false;
    }


if (age === "") {
        $('#sage_error').html('**The Age must be filled');
        $('#sage_error').css('color', 'red');
        return false;
    } 
if (isNaN(age)){  
 $('#sage_error').html('Enter Numeric value only'); 
  $('#sage_error').css('color', 'red'); 
  return false;  
}

if (age < 18 || age > 35) {
    $('#sage_error').html('**The Age limit should be between 18 and 35**');
    $('#sage_error').css('color', 'red');
    return false;
}



 if(course === ""){
        $('#scourse_error').html('**The course must be filled');
        $('#scourse_error').css('color', 'red');
        return false;
    }
    


	mydata ={name:name,phone:phone,email:email,age:age,course:course,username:username,password:password};
	console.log(mydata);

	$.ajax({
		url:"sinsert.php",
		method:"POST",
		data:JSON.stringify(mydata),
		success: function (data){
		console.log(data);
			msg ="<div class ='alert alert-dark mt-3'>"+ data +"</div>";
			$("#sohin").html(msg);
		$("#mysform")[0].reset();

          setTimeout(redirectNewPage, delayTime);

		},

	});
}); 




$("#Submit_btn").click(function(e) {
    e.preventDefault();
    let username = $("#sname").val();
    let password = $("#spassword").val();
      let role = $("#usertype").val();
$('#Suser_error, #Spass_error').html('');
    
    if (username === "" && password === ""){
        $('#Suser_error').html('**The username must be filled');
        $('#Suser_error').css('color', 'red');
        return false;
    } else if (username === ""){
        $('#Suser_error').html('**The username must be filled');
        $('#Suser_error').css('color', 'red');
        return false;
    } else if (password === ""){
        $('#Spass_error').html('**The password must be filled');
        $('#Spass_error').css('color', 'red');
        return false;
    } 

    let mydata = { username: username,password: password , role :role };

    console.log(mydata);

$.ajax({
    url: "slogin.php",
    method: "POST",
    data: JSON.stringify(mydata),
    success: function(data) {
        if (data === 'student') {
            let msg = "<div class ='alert alert-dark mt-3'>Student login successful</div>";
            $(".smsg").html(msg);
            $("#rform")[0].reset();
            setTimeout(redirectToNewPage, delayTime);
        } else if (data === 'admin') {
            let msg = "<div class ='alert alert-dark mt-3'>Admin login successful</div>";
            $(".smsg").html(msg);
            $("#rform")[0].reset();
            setTimeout(redirectToPage, delayTime);
        } else {
            let msg = "<div class ='alert alert-dark mt-3'>Invalid role</div>";
            $(".smsg").html(msg);
            $("#rform")[0].reset();
        }
    },
    error: function(xhr, status, error) {
        console.error(error);
        let msg = "<div class ='alert alert-dark mt-3'>Error occurred</div>";
        $(".smsg").html(msg);
    },
});


});


$("#vBtn").click(function (e) {
  e.preventDefault();
    var id =$("#vid").val();
    var name =$("#vname").val();
    var age =$("#vage").val();

       $('#uname_error,#uage_error').html('');

  if (name === "") {
        $('#uname_error').html('**The name must be filled');
        $('#uname_error').css('color', 'red');
        return false;
     } else if (!validateName(name)) {
        $('#uname_error').html('**The name should be alphabatic only');
        $('#uname_error').css('color', 'red');
        return false;
    }



if (age === "") {
        $('#uage_error').html('**The Age must be filled');
        $('#uage_error').css('color', 'red');
        return false;
    } 
if (isNaN(age)){  
 $('#uage_error').html('Enter Numeric value only'); 
  $('#uage_error').css('color', 'red'); 
  return false;  
}

if (age < 18 || age > 35) {
    $('#uage_error').html('**The Age limit should be between 18 and 35**');
    $('#uage_error').css('color', 'red');
    return false;
}




mydata ={ id:id,name:name,age:age};
    console.log(mydata);
    $.ajax({
        url: "V_update.php",
        method: "POST",
        data: JSON.stringify(mydata),
        success: function(data){

            $("#vid").val(data.id);
            $("#vname").val(data.name);
            $("#vage").val(data.age);
            let ms = "<div class ='alert alert-dark mt-3'>updated successfully</div>";
                $("#vmsg").html(ms);
               setTimeout(RefereshNewPage, del);
             
        
        },
    });
    


});




















});