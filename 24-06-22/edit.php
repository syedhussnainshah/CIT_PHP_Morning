<?php include_once 'header.php';
include_once 'connection.php';
echo $edit_id = $_GET['edit_id'];
$select = "SELECT * FROM signup WHERE id = '$edit_id'";
$query = mysqli_query($conn, $select);
$row = mysqli_fetch_array($query);
echo $row['user_name'];
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-3">
            <center>
                <h3>Form Edit</h3>
            </center>
            <form action="Function.php" method="POST">
                <input type="hidden" name="user_id" value="<?php echo $edit_id?>">
                <label for="" class="w-100">
                    Enter Your Name
                    <input type="text" class="form-control" name="username" value="<?php echo $row['user_name'] ?>" placeholder="Enter Your Name">
                </label>
                <label for="" class="w-100">
                    Enter Your Email
                    <input type="email" class="form-control" name="useremail" value="<?php echo $row['user_email'] ?>" placeholder="Enter Your Name">
                </label>
                <label for="" class="w-100">
                    Enter Your Email
                    <input type="password" class="form-control" name="userpassword" placeholder="Enter Your Name">
                </label>
                <input type="submit" name="formupdate" class="btn btn-primary mt-2">
            </form>
        </div>
    </div>

</div>




<?php include_once 'footer.php'; ?>