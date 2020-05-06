<?php
require_once 'database.php';

/**
 * delete_order.php
 * Deletes an order from the orders table based off of a order_id retrieved from a POST.
 * Deleting an order also deletes all products in OrderProducts connected to that order.
 */

if($_POST) {
    $id = $_POST['order_id'];
 
    $sql = "DELETE FROM orders WHERE order_id = {$id}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Successfully deleted!!</p>";
        echo "<a href='../../Client_2/viewallorders.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $connect->error;
    }
    $connect->close();
}
?>