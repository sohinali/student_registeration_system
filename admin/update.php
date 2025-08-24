<?php
$conn = mysqli_connect("localhost", "root", "", "project_db");

$data = stripcslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);

if(isset($mydata['sid'])) {
    $id = $mydata['sid'];
    
    $str = "SELECT * FROM student WHERE id = '$id'";
    $result = mysqli_query($conn, $str);

    if($result) {
        if(mysqli_num_rows($result) > 0) {
            $row = $result->fetch_assoc();
            echo json_encode($row);
        } else {
            echo json_encode(["error" => "No student found with that ID"]);
        }
    } else {
        echo json_encode(["error" => mysqli_error($conn)]);
    }
} else {
    echo json_encode(["error" => "SID is not provided"]);
}
?>
