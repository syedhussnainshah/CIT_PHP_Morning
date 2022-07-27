<?php
include_once 'header.php';
echo $user_id; 
$idOfUser = $_SESSION['user_id'];
$SELECT = "SELECT * FROM signup INNER JOIN user_data ON signup.id=user_data.user_id INNER JOIN city ON user_data.city=city.city_id WHERE id='$idOfUser'";
$queryUSERDATA = mysqli_query($conn, $SELECT);
$USERDATATABLE  = mysqli_fetch_array($queryUSERDATA);
echo $USERDATATABLE['city_name'];
?>
<div class="container">
    <form action="Function.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="user_id" value="<?php echo $USERDATATABLE['id'] ?>">
        <div class="row">
            <center><b> Edit Profile</b></center>
            <div class="col-md-12">
                <label for="name">
                    Image
                </label>

                <input type="file" id="name" class="form-control" name="img">
            </div>
            <div class="col-md-6 ">
                <label for="name">
                    Enter Your Name
                </label>

                <input type="text" id="name" class="form-control" value="<?php echo $USERDATATABLE['user_name'] ?>" name="name" placeholder="Enter Your Name">
            </div>
            <div class="col-md-6">
                <label for="">
                    Enter Your Email
                </label>
                <input type="email" class="form-control" name="email" value="<?php echo $ROW_USERINFO['user_email'] ?>" placeholder="Enter Your Email" readonly>
            </div>
            <div class="col-md-6">
                <label for="">
                    Select Gender
                </label>
                <br>
                <input type="radio" class="" name="gender" value="Male" <?php
                                                                        if (empty($USERDATATABLE['gender'])) {
                                                                            echo '';
                                                                        } else {

                                                                            if ($USERDATATABLE['gender'] == 'Male') {
                                                                                echo 'checked';
                                                                            } else {
                                                                            }
                                                                        } ?>> Male
                <input type="radio" class="" name="gender" value="Female" <?php
                                                                            if (empty($USERDATATABLE['gender'])) {
                                                                                echo '';
                                                                            } else {
                                                                                if ($USERDATATABLE['gender'] == 'Female') {
                                                                                    echo 'checked';
                                                                                } else {
                                                                                }
                                                                            } ?>> Female
            </div>
            <div class="col-md-6">
                <label for="">
                    Enter Number
                </label>
                <input type="number" class="form-control" name="number" value="<?php echo $USERDATATABLE['number']; ?>" placeholder="+92">
            </div>
            <div class="col-md-6">
                <label for="">
                    Enter Address
                </label>
                <textarea name="address" class="form-control" id="" cols="30" rows="2"><?php echo $USERDATATABLE['address'] ?></textarea>
            </div>
            <div class="col-md-6">
                <label for="">Select City</label>
                <select name="city" class="form-select" id="">
                    <option value="FSD" <?php if ($USERDATATABLE['city'] == 1) {
                                            echo "selected";
                                        } ?>>Faislabad</option>

                    <option value="LHR" <?php if ($USERDATATABLE['city'] == 2) {
                                            echo "selected";
                                        } ?>>Lahore</option>
                </select>
            </div>
            <div class="col-md-6">
                <br>
                <button class="btn btn-success" name="updateprofile">Update</button>
            </div>

        </div>
    </form>
</div>


<?php
include_once 'footer.php';
?>