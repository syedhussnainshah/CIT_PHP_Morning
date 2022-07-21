<?php
include_once 'header.php';

// session_destroy();
if (empty($_SESSION['user_id'])) {
    header('location: login.php');
}
echo $_SESSION['user_id'];
include_once 'connection.php';
$Select = "SELECT * FROM signup";
$Query = mysqli_query($conn, $Select);

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-3">
            <center>
                <h3>Form</h3>
            </center>
            Web Content 
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-md-12">
            <table class="table table-dark table-striped mt-2">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">User Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($Query)) {


                    ?>
                        <tr>
                            <th scope="row"><?php echo $row['id'] ?></th>
                            <td><?php echo $row['user_name'] ?></td>
                            <td><?php echo $row['user_email'] ?></td>
                            <td>
                                <a href="edit.php?edit_id=<?php echo $row['id'] ?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="delete.php?del_id=<?php echo $row['id'] ?>"><button class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <!-- <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</div>




<?php include_once 'footer.php'; ?>