<?php 
require 'db.php';
$obj=new Config();
$data=stripcslashes(file_get_contents("php://input"));
	$mydata=json_decode($data,true);
		$sid = $mydata['sid'];

$sql=$obj->delete($sid);
if($sql){
		echo "<script>alert('Record inserted successfully');</script>";
		echo "<script>window.location.href='home.php';</script>";
	}else{
				echo "<script>alert('Record not Inserted');</script>";
		echo "<script>window.location.href='insert.php';</script>";

	}
