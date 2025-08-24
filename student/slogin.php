<?php
$student="student";
$admin="admin";
$conn = mysqli_connect("localhost", "root", "", "project_db");

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);

if (isset($mydata['username']) && isset($mydata['password']) && isset($mydata['role'])) {
    $name = $mydata['username'];
    $password = $mydata['password'];
    $role =$mydata['role'];

    $sql = "SELECT * FROM $role WHERE username = '$name' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $count = mysqli_num_rows($result);
        if ($count > 0) { 
            $data = mysqli_fetch_assoc($result);
            if($role =='student'){
            session_start();
            $_SESSION['user_id']= $data['id'];
            echo $student;
        } else if($role =='admin'){
            session_start();
            $_SESSION['user']= $data['id'];
            echo $admin;
        }else{
            echo 0;
        
        }
    }
    else {
        echo "Query failed: " . mysqli_error($conn);
    }
} else {
    echo "Username or password not provided";
}
}

?>
