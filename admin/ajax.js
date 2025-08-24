$(document).ready(function(){

	const delayTime = 1000;

function redirectToNewPage() {
       window.location.href = "home1.php";
}
const validateEmail = (email) => {
  return email.match(
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  );
};

const validateName = (name) => {
  return name.match(
			/^[a-zA-Z\s]+$/
  );
};

const validatePass = (password) => {
   return password.match( 
   	/^[a-zA-Z0-9_]{4,8}$/

   	);
};
const validateUser = (username) => {
   return username.match( 
   	/^[a-z0-9_]{4,8}$/

   	);
};


	$("#Save").click(function (e) {
    e.preventDefault();
    var name = $("#rname").val();
    var username = $("#ruser").val();
    var mobile = $("#rmobile").val();
    var email = $("#remail").val();
    var age = $("#rage").val();
    var course = $("#rcourse").val();
    var password = $("#rpass").val();

    $('#euser, #ename, #epass, #emobile, #eemail, #eage, #ecourse').html('');

    if (username === "") {
        $('#euser').html('**The username must be filled');
        $('#euser').css('color', 'red');
        return false;
    }else if (!validateUser(username)) {
        $('#euser').html('**Only small Alphabets, Numbers and Underscore and between 4 to 8 characters ');
        $('#euser').css('color', 'red');
        return false;
    }


    if (password === "") {
        $('#epass').html('**The password must be filled');
        $('#epass').css('color', 'red');
        return false;
    }else if (!validatePass(password)) {
        $('#epass').html('**Only Alphabets, Numbers and Underscore and between 4 to 8 characters ');
        $('#epass').css('color', 'red');
        return false;
    }


    if (name === "") {
        $('#ename').html('**The name must be filled');
        $('#ename').css('color', 'red');
        return false;
     } else if (!validateName(name)) {
        $('#ename').html('**The name should be alphabatic only');
        $('#ename').css('color', 'red');
        return false;
    }


    if (mobile === "") {
        $('#emobile').html('**The mobile number must be filled');
        $('#emobile').css('color', 'red');
        return false;
    } else if (mobile.length !== 10) {
        $('#emobile').html('**Must be 10 Digits');
        $('#emobile').css('color', 'red');
        return false;
    } else if (!$.isNumeric(mobile)) {
        $('#emobile').html('**This field cannot contain letters');
        $('#emobile').css('color', 'red');
        return false;
    }

    
    if (email === "") {
        $('#eemail').html('**The Email must be filled');
        $('#eemail').css('color', 'red');
        return false;
    } else if (!validateEmail(email)) {
        $('#eemail').html('**The Email is invalid');
        $('#eemail').css('color', 'red');
        return false;
    }

if (age === "") {
        $('#eage').html('**The Age must be filled');
        $('#eage').css('color', 'red');
        return false;
    } 
if (isNaN(age)){  
 $('#eage').html('Enter Numeric value only'); 
  $('#eage').css('color', 'red'); 
  return false;  
}

if (age < 18 || age > 35) {
    $('#eage').html('**The Age limit should be between 18 and 35**');
    $('#eage').css('color', 'red');
    return false;
}




    if (course === "") {
        $('#ecourse').html('**The course must be filled');
        $('#ecourse').css('color', 'red');
        return false;
    }

    var mydata = { name: name, mobile: mobile,email: email,age: age,course: course,username: username,password: password };
    console.log(mydata);

    $.ajax({
        url: "insert.php",
        method: "POST",
        data: JSON.stringify(mydata),
        success: function (data) {
            console.log(data);
            var msg = "<div class ='alert alert-dark mt-3'>" + data + "</div>";
            $("#sohin").html(msg);
            $("#myform")[0].reset();
        },
    });
});





$("#submit").click(function(e) {
    e.preventDefault();

    let username = $("#name").val();
    let password = $("#password").val();

    $('#user_error, #pass_error, #pass_incorrect,#user_incorrect').html('');
    
    if (username === "" && password === "") {
        $('#user_error').html('**The username must be filled');
        $('#user_error').css('color', 'red');
        return false;
    } else if (username === "") {
        $('#user_error').html('**The username must be filled');
        $('#user_error').css('color', 'red');
        return false;
    } else if (password === "") {
        $('#pass_error').html('**The password must be filled');
        $('#pass_error').css('color', 'red');
        return false;
    } else if (password !== "admin") {
        $('#pass_incorrect').html('**Incorrect password');
        $('#pass_incorrect').css('color', 'red');
        return false;
    } else if (username !== "admin") {
        $('#user_incorrect').html('**Incorrect username');
        $('#user_incorrect').css('color', 'red');
        return false;
    }

    let mydata = { username: username,password: password };

    console.log(mydata);

    $.ajax({
        url: "login.php",
        method: "POST",
        data: JSON.stringify(mydata),
        success: function(data) {
            if (data == 1) {
                let ms = "<div class ='alert alert-dark mt-3'>Login successfully</div>";
                $(".ms").html(ms);
                $("#form")[0].reset();

                setTimeout(redirectToNewPage, delayTime);

            } else {
                let ms = "<div class ='alert alert-dark mt-3'>Login Failed</div>";
                $(".ms").html(ms);
                $("#form")[0].reset();
            }
        }
    });
});







	function showdata(){

		output="";
	$.ajax({
			url:"display.php",
			method:"GET",
			dataType:"json",
			success:function(data){
				console.log(data);
				if(data){
					x=data;

				}else{
					x="";
				}
				for(i=0;i<x.length;i++){
					output += "<tr>";
output += "<td>" + x[i].id + "</td>";
output += "<td>" + x[i].name + "</td>";
output += "<td>" + x[i].mobile + "</td>";
output += "<td>" + x[i].email + "</td>";
output += "<td>" + x[i].age + "</td>";
output += "<td>" + x[i].course + "</td>";
output += "<td>" + x[i].username + "</td>";
output += "<td>" + x[i].password + "</td>";
output += "<td><button class='btn btn-danger btn-sm btn-del' data-sid='" + x[i].id + "' onClick='return confirm(\"Do you really want to delete?\");'>Delete</button></td>";
output += "<td><button type='button' class='btn btn-primary btn-edit' data-bs-toggle='modal' data-bs-target='#exampleModal' data-sid='" + x[i].id + "'>Edit</button></td>";
output += "</tr>";
				}
				$("#tbody").html(output);

			},
		});
	}

	showdata()




	
	$("tbody").on("click", ".btn-del",function(){

		console.log("button clickeds");
		let id = $(this).attr("data-sid");
		console.log(id);

		mydata = {sid:id};
		$.ajax({
			url:"delete.php",
			method:"POST",
			data:JSON.stringify(mydata),
			success:function(){
				/*$("#tbody")[0].reset();*/
				location.reload();
				
			},



		});


	});


$("#update").click(function (e) {
	e.preventDefault();
	let id =$("#sid").val();
    let username =$("#username").val();
    let password =$("#password").val();
	let name =$("#name").val();
	let course =$("#course").val();
	let age =$("#age").val();
	let email =$("#email").val();
	let mobile =$("#pn").val();

     $('#tusername_error, #tname_error, #tpassword_error, #tmobile_error, #temail_error, #tage_error, #tcourse_error').html('');

if (username === "") {
        $('#tusername_error').html('**The username must be filled');
        $('#tusername_error').css('color', 'red');
        return false;
    }else if (!validateUser(username)) {
        $('#tusername_error').html('**Only small Alphabets, Numbers and Underscore and between 4 to 8 characters ');
        $('#tusername_error').css('color', 'red');
        return false;
    }


    if (password === "") {
        $('#tpassword_error').html('**The password must be filled');
        $('#tpassword_error').css('color', 'red');
        return false;
    }else if (!validatePass(password)) {
        $('#tpassword_error').html('**Only Alphabets, Numbers and Underscore and between 4 to 8 characters ');
        $('#tpassword_error').css('color', 'red');
        return false;
    }


    if (name === "") {
        $('#tname_error').html('**The name must be filled');
        $('#tname_error').css('color', 'red');
        return false;
     } else if (!validateName(name)) {
        $('#tname_error').html('**The name should be alphabatic only');
        $('#tname_error').css('color', 'red');
        return false;
    }


    if (mobile === "") {
        $('#tmobile_error').html('**The mobile number must be filled');
        $('#tmobile_error').css('color', 'red');
        return false;
    } else if (mobile.length !== 10) {
        $('#tmobile_error').html('**Must be 10 Digits');
        $('#tmobile_error').css('color', 'red');
        return false;
    } else if (!$.isNumeric(mobile)) {
        $('#tmobile_error').html('**This field cannot contain letters');
        $('#tmobile_error').css('color', 'red');
        return false;
    }

    
    if (email === "") {
        $('#temail_error').html('**The Email must be filled');
        $('#temail_error').css('color', 'red');
        return false;
    } else if (!validateEmail(email)) {
        $('#temail_error').html('**The Email is invalid');
        $('#temail_error').css('color', 'red');
        return false;
    }

if (age === "") {
        $('#tage_error').html('**The Age must be filled');
        $('#tage_error').css('color', 'red');
        return false;
    } 
if (isNaN(age)){  
 $('#tage_error').html('Enter Numeric value only'); 
  $('#tage_error').css('color', 'red'); 
  return false;  
}

if (age < 18 || age > 35) {
    $('#tage_error').html('**The Age limit should be between 18 and 35**');
    $('#tage_error').css('color', 'red');
    return false;
}




    if (course === "") {
        $('#tcourse_error').html('**The course must be filled');
        $('#tcourse_error').css('color', 'red');
        return false;
    }

mydata ={ id:id,name:name,mobile:mobile,email:email,age:age,course:course,username:username,password:password};
	console.log(mydata);

	$.ajax({
		url:"updated.php",
		method:"POST",
		data:JSON.stringify(mydata),
		success: function (data){
			$("#sid").val(data.id);
            $("#username").val(data.username);
            $("#password").val(data.password);
            $("#name").val(data.name);
            $("#course").val(data.course);
            $("#age").val(data.age);
            $("#email").val(data.email);
            $("#pn").val(data.mobile);
            showdata()


		},


	});
});



$("tbody").on("click", ".btn-edit", function() {
    console.log("Edit button clicked");
    let id = $(this).attr("data-sid");
    console.log(id);
    let mydata = { sid: id };
    $.ajax({
        url: "update.php",
        method: "POST",
        dataType: "json",
        data: JSON.stringify(mydata),
        success: function(data) {
            $("#sid").val(data.id);
            $("#name").val(data.name);
            $("#course").val(data.course);
            $("#age").val(data.age);
            $("#email").val(data.email);
            $("#pn").val(data.mobile);
            $("#username").val(data.username);
            $("#password").val(data.password);
            showdata()
        }
    });
});







});

