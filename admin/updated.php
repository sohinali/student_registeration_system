 	<?php
$conn = mysqli_connect("localhost", "root", "", "project_db");

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);

if (isset($mydata['id']) && isset($mydata['name']) && isset($mydata['mobile']) 
    && isset($mydata['email']) && isset($mydata['age']) && isset($mydata['course']) && isset($mydata['username']) && isset($mydata['password'])) {

    $id = $mydata['id'];
    $name = $mydata['name'];
    $mobile = $mydata['mobile'];
    $email = $mydata['email'];
    $age = $mydata['age'];
    $course = $mydata['course'];
     $username = $mydata['username'];
      $password = $mydata['password'];

    $str1 = "UPDATE student SET name = '$name', mobile = '$mobile', email = '$email', age = '$age', course = '$course' ,username = '$username', password = '$password' WHERE id = '$id'";
    $count = mysqli_query($conn, $str1);

    if ($count > 0) {
        echo "updated";
    } else {
        echo "failed";
    }
} else {
    echo "Required fields are not provided";
}
?>
