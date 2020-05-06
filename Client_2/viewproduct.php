<?php
require_once '../Provider_2/classes/database.php';

/**
 * Views a single product chosen from the previous page. Displays all columns from the products table.
 */

if ($_GET['product_id'])
{
    $product_id = $_GET['product_id'];

    $SQL = "SELECT * FROM products WHERE product_id = {$product_id}";
    $result = $connect->query($SQL) or die($connect->error);
    $data = $result->fetch_assoc();

    $connect->close();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>View Product</title>
    </head>
    <body>
        <h3>View Product</h3>
        <p>Product ID:  <?php echo $data["product_id"]; ?></p>
        <p>Name: <?php echo $data["name"]; ?></p>
        <p>Description: <?php echo $data["description"]; ?></p>
        <p>Price: <?php echo $data["price"]; ?></p>
		<p>Color: <?php echo $data["color"]; ?></p>
    </body>
</html>