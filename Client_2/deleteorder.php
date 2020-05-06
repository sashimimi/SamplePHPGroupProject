<?php

require_once '../provider_2/classes/database.php';
 
if($_GET['order_id']) {
    $id = $_GET['order_id'];
 
    $sql = "SELECT * FROM orders WHERE order_id = {$id}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
 
    $connect->close();
}
/**
 * deleteorder.php
 * Deletes an order from the orders table based off of the order ID.
 * Also deletes any products from the orderproducts table with the order ID retrieved.
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Delete Order</title>
    </head>
    <body>
        <h3>Delete order?</h3>
        <form action="../provider_2/classes/delete_order.php" method="post">
        <input type="hidden" name="order_id" value="<?php echo $data['order_id'] ?>" />
        <button type="submit">Save Changes</button>
        <a href="viewallorders.php"><button type="button">Back</button></a>
        </form>
    </body>
</html>
