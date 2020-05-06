<?php
require_once '../Provider_2/classes/database.php';

/**
 * Views a single order chosen from the previous page. Displays all columns from the orders table, as well as all products
 * from the products table with the specific order_id. It is based off of the order id retrieved from a GET.
 */

if ($_GET['order_id'])
{
    $order_id = $_GET['order_id'];

    $SQL = "SELECT * FROM orders WHERE order_id = {$order_id}";
    $result = $connect->query($SQL) or die($connect->error);
    $data = $result->fetch_assoc();

    $SQL = "SELECT * FROM orderproducts WHERE f_order_id = {$order_id}";
    $products = $connect->query($SQL);

    $connect->close();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>View Order</title>
    </head>
    <body>
        <h3>View Order</h3>
        <p>Order ID <?php echo $data["order_id"]; ?></p>
        <p>Customer ID <?php echo $data["f_cust_id"]; ?></p>
        <div id="products-div">
            <?php
                if ($products->num_rows > 0)
                {
                    echo "<strong>List of products with order_id of " . $data["order_id"] . "</strong><br/>";
                    while ($row = $products->fetch_assoc())
                    {
                        echo $row["f_product_id"] . "<br/>";
                    }
                }
            ?>
        </div>
    </body>
</html>