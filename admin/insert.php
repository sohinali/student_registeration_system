<?php
error_reporting(0);
require 'db.php';

$obj=new Config();

	$data=stripcslashes(file_get_contents("php://input"));
	$mydata=json_decode($data,true);

		$username=$mydata['username'];
		$password=$mydata['password'];
		$name = $mydata['name'];
		$mobile = $mydata['mobile'];
		$email = $mydata['email'];
		$age = $mydata['age'];
		$course = $mydata['course'];

		$sql=$obj->save($name,$mobile,$email,$age,$course,$username,$password);
		if($sql){
			echo "Record inserted successfully";
		}else{
			echo "Record not Inserted ";
		}
 	?>