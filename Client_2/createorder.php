<?php
/**
 * createorder.php
 * Displays a form to fill out in order to insert a new order into the orders table.
 */

 /**
  * The POST will need to insert into both the orders table (using the customer id)
  * and the orderproducts table (using the generated order_id from the orders table and the product id).
  * In order to avoid the query erroring out, it will need to check to see if the customer id and the product id exists.
  */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Create Order</title>
    </head>
    <body>
        <h3>Create Order</h3>
        <form action="../Provider_2/classes/create_order.php" method="post">
            <label for="customer-id-textbox">Customer ID of who owns the order: </label>
            <input type="text" name="customer-id-textbox"/>
            <br/><br/>
            <label for="product-id-textbox">Product ID of a product to add to the order: </label>
            <input type="text" name="product-id-textbox"/>
            <br/><br/><br/>
            <input type="submit"/>
        </form>
    </body>
</html>