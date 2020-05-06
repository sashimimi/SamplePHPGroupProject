<?php
require_once '../provider_2/classes/database.php';
/**
 * deleteproduct.php
 * Deletes a product from the products table based off of the product ID.
 */

if($_GET['product_id']) {
    $id = $_GET['product_id'];
 
    $sql = "SELECT * FROM products WHERE product_id = {$id}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
 
    $connect->close();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Delete Product</title>
    </head>
    <body>
        <h3>Delete product?</h3>
        <form action="../Provider_2/classes/delete_product.php" method="post">
        <input type="hidden" name="product_id" value="<?php echo $data['product_id'] ?>"/>
        <button type="submit">Save Changes</button>
        <a href="viewallproducts.php"><button type="button">Back</button></a>
        </form>
    </body>
</html>
