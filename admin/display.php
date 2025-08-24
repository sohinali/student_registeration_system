<?php

require 'db.php';

$obj=new Config();

 $result=$obj->fetch();

if($result->num_rows > 0){
	$data=array();
	while( $row= $result->fetch_assoc()){
	$data[] = $row;
	 }
}


echo json_encode($data);

?>