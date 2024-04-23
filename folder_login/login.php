<?php
    $db = mysqli_connect('localhost', 'root', '','dbtba');
    if (!$db){
        echo "Database connection faild";
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tbadmin WHERE email = '".$email."' AND password = '".$password."'";

    $result = mysqli_query($db,$sql);
    $count = mysqli_num_rows($result);

    if ($count == 1){
        echo json_encode("Success");
    }else {
        echo json_encode("Error");
    }
?>