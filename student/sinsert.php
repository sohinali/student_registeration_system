<?php
require '../admin/db.php';


$obj=new Config();

	$data=stripcslashes(file_get_contents("php://input"));
	$mydata=json_decode($data,true);
		$name = $mydata['name'];
		$username = $mydata['username'];
		$password = $mydata['password'];
		$mobile = $mydata['phone'];
		$email = $mydata['email'];
		$age = $mydata['age'];
		$course = $mydata['course'];

		$sql=$obj->St_insert($name,$mobile,$email,$age,$course,$username,$password);
		if($sql){
			echo "Record inserted successfully";
		}else{
			echo "Record not Inserted ";
		}
 	?>