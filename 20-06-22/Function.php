<?php
include_once 'connection.php';
if (isset($_POST['formsubmit'])) {
    $name =  $_POST['username'];
    $email =   $_POST['useremail'];
    $pass =  $_POST['userpassword'];
    $INSERT = "INSERT INTO signup (user_name,user_email,user_pass) VALUES ('$name','$email','$pass')";
    $query = mysqli_query($conn, $INSERT);
    if ($query) {
        echo "OK Data Submited";
    } else {
        echo mysqli_error($conn);
    }
}
