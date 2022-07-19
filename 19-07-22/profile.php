<?php
include_once 'header.php';
echo $ROW_USERINFO['user_name'];
?>
<div class="container">
    <form action="Function.php" method="POST">
        <input type="text" name="user_id" value="<?php echo $ROW_USERINFO['id']?>">
        <div class="row">
            <center><b> Edit Profile</b></center>
            <div class="col-md-6 ">
                <label for="name">
                    Enter Your Name
                </label>

                <input type="text" id="name" class="form-control" value="<?php echo $ROW_USERINFO['user_name'] ?>" name="name" placeholder="Enter Your Name">
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
                <input type="radio" class="" name="gender" value="Male"> Male
                <input type="radio" class="" name="gender" value="Female"> Female
            </div>
            <div class="col-md-6">
                <label for="">
                    Enter Number
                </label>
                <input type="number" class="form-control" name="number" value="" placeholder="+92">
            </div>
            <div class="col-md-6">
                <label for="">
                    Enter Address
                </label>
                <textarea name="address" class="form-control" id="" cols="30" rows="2"></textarea>
            </div>
            <div class="col-md-6">
                <label for="">Select City</label>
                <select name="city" class="form-select" id="">
                    <option value="FSD">Faislabad</option>
                    <option value="MLT">Multan</option>
                    <option value="LHR">Lahore</option>
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