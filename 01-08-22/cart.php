<?php
session_start();
include_once 'connection.php';
// echo $_SESSION['mycart'];
foreach ($_SESSION['mycart'] as $value) {
    foreach ($value as $id => $content) {
        if ($id == 'qty') {
            $product_qty =  $content;
        }
        if ($id == 'id') {
            $product_id = $content;
        }

        $product_id * @$product_qty;


        // echo $qty;

    }
    $select = "SELECT * FROM products WHERE product_id ='$product_id'";
    $query = mysqli_query($conn, $select);
    while ($row = mysqli_fetch_array($query)) {
        // echo $row['product_price'];
        echo "<img src=assets/img/" . $row['product_image'] . " width='20%'>";
        echo "Product_name is " . $row['product_name'] . "<br>" . $row['product_price'] * @$product_qty . "<br>";
        // echo "5" * 6;
    }
}
