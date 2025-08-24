<?php
$conn = mysqli_connect("localhost", "root", "", "project_db");

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);

if (isset($mydata['username']) && isset($mydata['password'])) {
    $name = $mydata['username'];
    $password = $mydata['password'];

    $sql = "SELECT * FROM admin WHERE username = '$name' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            $data = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['user']= $data['id'];
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo "Query failed: " . mysqli_error($conn);
    }
} else {
    echo "Username or password not provided";
}
?>
