 	<?php
$conn = mysqli_connect("localhost", "root", "", "project_db");

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);

if (isset($mydata['id']) && isset($mydata['name']) && isset($mydata['age'])){

    $id = $mydata['id'];
    $name =$mydata['name'];
    $age = $mydata['age'];

    $str5 = "UPDATE student SET name = '$name', age = '$age' WHERE id = '$id'";
    $count = mysqli_query($conn, $str5);

            if ($count > 0) {
               echo "updated";
            }else {
            echo "failed";
                }
} else {
    echo "Required fields are not provided";
}

?>
