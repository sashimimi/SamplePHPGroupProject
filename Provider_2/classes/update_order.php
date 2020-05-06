<?php
require_once 'database.php';

/**
 * update_order.php
 * Updates an existing order from the orders table based off of user input from a POST.
 */
if($_POST) {
    $customerId = $_POST['customer-id-textbox'];
    $productId = $_POST['product-id-textbox'];
 
    $id = $_POST['order_id'];
 
    $sql = "UPDATE orders SET f_cust_id = {$customerId}, f_prod_id = {$productId} WHERE order_id = {$id}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../../Client_2/viewallorders.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}
?>