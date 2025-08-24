<?php
define('server', 'localhost');
define('user','root');
define('password', '');
define('dbname', 'project_db');

class Config{


function __construct(){

	$conn =mysqli_connect(server,user,password,dbname);
	$this->db=$conn;

}

public function save($name,$mobile,$email,$age,$course,$username,$password){

$ret=mysqli_query($this->db,"insert into student (name,mobile,email,age,course,username,password) values ('$name','$mobile','$email','$age','$course','$username','$password')");
	return $ret;

}

public function fetch(){

$fetch=mysqli_query($this->db,"select * from student");
	return $fetch;

}


public function delete($id){

$del=mysqli_query($this->db,"delete from student where id ='$id'");
	return $del;

}

public function update($id){

	$q = "select * from student where id = '$id'";

	$str=mysqli_query($this->db,"select * from student where id = '$id'");
	return $q;
}

public function Data_update($id,$name,$mobile,$email,$age,$course){

		$str1=mysqli_query($this->db,"UPDATE student SET  name = '$name',mobile ='$mobile',email='$email',age ='$age', course ='$course' where id = '$id'");
		return $str1;
}






// public function Login($nm,$pass){

// 	$Q=mysqli_query($this->db,"SELECT * from login WHERE username = '$nm' AND password = '$pass'");
// 		$count=mysqli_num_rows($Q);
		
// 		return $count;


// }











public function St_insert($name,$mobile,$email,$age,$course,$username,$password){

$rt=mysqli_query($this->db,"insert into student (name,mobile,email,age,course,username,password) values ('$name','$mobile','$email','$age','$course','$username','$password')");
	return $rt;

}







}

?>