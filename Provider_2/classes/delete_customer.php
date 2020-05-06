<?php
require_once 'database.php';

/**
 * delete_customer.php
 * Deletes a customer from the customers table based off of a cust_id retrieved from a POST.
 * Deleting a customer also deletes all orders connected to that customer.
 */
if($_POST)
{
    $id = $_POST['cust_id'];
    $sql = "DELETE FROM customers WHERE cust_id = '$id'";
    if($connect->query($sql) === TRUE)
    {
        echo "<p>Successfully removed!!</p>";
        echo "<a href='../../Client_2/viewallcustomers.php'><button type='button'>Back</button></a>";
    }
    else {
        echo "Error removing record: ". $connect->error;
    }
    $connect->close();
}

?>