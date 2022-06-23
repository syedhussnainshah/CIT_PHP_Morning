<?php
include_once 'connection.php';
if (isset($_POST['formsubmit'])) {
    $name =  $_POST['username'];
    $email =   $_POST['useremail'];
    $password =  $_POST['userpassword'];
    $pass = password_hash($password, PASSWORD_DEFAULT);
    $INSERT = "INSERT INTO signup (user_name,user_email,user_pass) VALUES ('$name','$email','$pass')";
    $query = mysqli_query($conn, $INSERT);
    if ($query) {
        header('location:login.php');
    } else {
        echo mysqli_error($conn);
    }
}
if (isset($_REQUEST['formupdate'])) {
    $name =  $_POST['username'];
    $email =   $_POST['useremail'];
    $user_id = $_REQUEST['user_id'];
    $update = "UPDATE `signup` SET `user_name`='$name',`user_email`='$email' WHERE id= '$user_id'";
    $query = mysqli_query($conn, $update);
    if ($query) {
        header('location: index.php');
    } else {
        echo "Not Update";
    }
}
