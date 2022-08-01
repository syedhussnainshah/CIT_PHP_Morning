<?php
session_start();
if (isset($_REQUEST['addtocart'])) {
    echo $id = $_REQUEST['product_id'];
    $qty = 7;
    $_SESSION['mycart'][$id] = array('id' => $id, 'qty' => $qty);
    header('location: cart.php');
}
