<?php
session_start();
// session_destroy();
include_once 'connection.php';

echo $user_id = $_SESSION['user_id'];
$Select = "SELECT * FROM signup WHERE id = '$user_id'";
$Query = mysqli_query($conn, $Select);

$ROWSTATUS = mysqli_fetch_array($Query);
echo $ROWSTATUS['status'];
if ($ROWSTATUS['status'] == 'user') {

    header('location: ../index.php');
}

if (empty($_SESSION['user_id'])) {
   
    header('location: ../login.php');
}

$Select = "SELECT * FROM signup";
$Query = mysqli_query($conn, $Select);
?>
<?php
include_once 'header.php';
?>
<div class="row">
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
<?php
include_once 'footer.php';
?>