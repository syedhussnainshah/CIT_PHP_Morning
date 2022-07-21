<?php
session_start();
include_once 'connection.php';
if (isset($_POST['formsubmit'])) {
    $name =  $_POST['username'];
    $email =   $_POST['useremail'];
    $password =  $_POST['userpassword'];
    $pass = password_hash($password, PASSWORD_DEFAULT);
    $SelectST = "SELECT * FROM signup WHERE user_email ='$email'";
    $QueryST = mysqli_query($conn, $SelectST);
    if (mysqli_num_rows($QueryST) == 1) {
        echo "DATA Already";
    } else {
        $INSERT = "INSERT INTO signup (user_name,user_email,user_pass) VALUES ('$name','$email','$pass')";
        $query = mysqli_query($conn, $INSERT);
        if ($query) {
            header('location:login.php');
        } else {
            echo mysqli_error($conn);
        }
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
if (isset($_REQUEST['loginform'])) {
    $email = $_REQUEST['useremail'];
    $pass = $_REQUEST['userpassword'];
    $select = "SELECT * FROM signup WHERE user_email = '$email' AND user_pass = '$pass'";
    $query = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($query);
    if (mysqli_num_rows($query) > 0) {
        if ($row['status'] == 'Admin') {
            $_SESSION['user_id'] = $row['id'];
            header('location:Dasboard/index.php');
        } else {
            $_SESSION['user_id'] = $row['id'];
            header('location:index.php');
        }
    } else {
        $_SESSION['message'] = "Email And Password Are Not Match<a href='index.php'>Please Reg Your Account</a>";
        header('location: login.php');
    }
}
if (isset($_REQUEST['updateprofile'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $gender =  $_REQUEST['gender'];
    $city = $_REQUEST['city'];
    $address = $_REQUEST['address'];
    $number = $_REQUEST['number'];
    $user_id = $_REQUEST['user_id'];
    $SELECT = "SELECT * FROM user_data WHERE user_id = '$user_id'";
    $Query = mysqli_query($conn, $SELECT);
    if (mysqli_num_rows($Query) > 0) {
        $UPDATE = "UPDATE `user_data` SET `gender`='$gender',`city`='$city',`address`='$address',`number`='$number' WHERE user_id = '$user_id'";
        $query = mysqli_query($conn, $UPDATE);
        if ($query) {
            echo "Update";
        } else {
            echo "no Update";
        }
    } else {
        $INSERT = "INSERT INTO `user_data`(`gender`, `city`, `address`, `number`, `user_id`) VALUES ('$gender','$city','$address','$number','$user_id')";
        $Query = mysqli_query($conn, $INSERT);
        if ($Query) {
            echo "Data Inserted";
        } else {
            echo "No Insert data Error";
        }
    }
}
