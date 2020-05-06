<?php
require_once 'database.php';

/**
 * create_order.php
 * Inserts a new order into the orders table based off of user input from a POST.
 */
 
if($_POST) {
    $customerId = $_POST['customer-id-textbox'];
    $productId = $_POST['product-id-textbox'];
 
    $sql = "INSERT INTO orders (f_cust_id, f_prod_id) VALUES ({$customerId}, {$productId})";
    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../../Client_2/viewallorders.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
?>