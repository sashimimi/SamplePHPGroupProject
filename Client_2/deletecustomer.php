<?php

/**
 * deletecustomer.php
 * Deletes a customer from the customers table based off of the customer ID.
 * Also deletes any orders from the orders table with the customer ID retrieved.
 */
require_once '../Provider_2/classes/database.php';

if($_GET['cust_id'])
{
    $id = $_GET['cust_id'];
    $sql = "SELECT * FROM customers WHERE cust_id = '$id'";

    $result = $connect->query($sql);
    $data = $result->fetch_assoc();

    $connect->close();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Delete Customer</title>
    </head>
    <body>
        <h3>Delete customer?</h3>
        <form action="../Provider_2/classes/delete_customer.php" method="post">
        <input type="hidden" name="cust_id" value="<?php echo $data['cust_id'] ?>" />
        <button type="submit">Save Changes</button>
        <a href="viewallcustomers.php"><button type="button">Back</button></a>
        </form>
    </body>
</html>
