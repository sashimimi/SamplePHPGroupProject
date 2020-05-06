<?php
require_once '../Provider_2/classes/database.php';

/**
 * Views a single customer chosen from the previous page. Displays all columns from the customers table, as well as all orders
 * from the orders table with the specific cust_id. It is based off of the customer id retrieved from a GET.
 */

if ($_GET['cust_id'])
{
    $cust_id = $_GET['cust_id'];

    $SQL = "SELECT * FROM customers WHERE cust_id = {$cust_id}";
    $result = $connect->query($SQL) or die($connect->error);
    $data = $result->fetch_assoc();

    $SQL = "SELECT * FROM orders WHERE f_cust_id = {$cust_id}";
    $orders = $connect->query($SQL);

    $connect->close();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>View Customer</title>
    </head>
    <body>
        <h3>View Customer</h3>
        <p>Customer ID: <?php echo $data["cust_id"]; ?></p>
        <p>First Name: <?php echo $data["first_name"]; ?></p>
        <p>Last Name: <?php echo $data["last_name"]; ?></p>
        <p>Email: <?php echo $data["email"]; ?></p>
        <p>Favorite Pet: <?php echo $data["fave_pet"]; ?></p>
        <div id="orders-div">
            <?php
                if ($orders->num_rows > 0)
                {
                    echo "<strong>List of orders with cust_id of " . $data["cust_id"] . "</strong><br/>";
                    while ($row = $orders->fetch_assoc())
                    {
                        echo $row["order_id"] . "<br/>";
                    }
                }
            ?>
        </div>
    </body>
</html>