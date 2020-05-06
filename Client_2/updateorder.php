<?php
/**
 * updateorder.php
 * Displays a form to fill out in order to update an order into the orders table.
 */
require_once '../provider_2/classes/database.php';
 
if($_GET['order_id']) {
    $id = $_GET['order_id'];
 
    $sql = "SELECT * FROM orders WHERE order_id = {$id}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
 
    $connect->close();
}
 /**
  * The POST will need to update both the orders table (using the customer id)
  * and the orderproducts table (using the generated order_id from the orders table and the product id).
  * In order to avoid the query erroring out, it will need to check to see if the customer id and the product id exists.
  */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Order</title>
    </head>
    <body>
        <h3>Update Order</h3>
        <form action="../Provider_2/classes/update_order.php" method="POST">
            <label for="customer-id-textbox">Customer ID of who owns the order: </label>
            <input type="text" name="customer-id-textbox"/>
            <br/><br/>
            <label for="product-id-textbox">Product ID of a product to add to the order: </label>
            <input type="text" name="product-id-textbox"/>
            <br/><br/><br/>
            <input type="hidden" name="order_id" value="<?php echo $data['order_id'] ?>" />
            <input type="submit"/>
        </form>
    </body>
</html>