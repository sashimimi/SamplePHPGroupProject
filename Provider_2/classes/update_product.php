<?php
require_once 'database.php';

/**
 * update_product.php
 * Updates a product in the products table based off of user input from a POST.
 */

if($_POST) {
	$name = $_POST['name-textbox'];
    $description = $_POST['description-textbox'];
    $price = $_POST['price-textbox'];
    $color = $_POST['color-textbox'];
 
    $id = $_POST['product_id'];
 
    $sql = "UPDATE products SET name = '$name', description = '$description', price = '$price', color = '$color' WHERE product_id = {$id}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
 
        echo "<a href='../../Client_2/viewallproducts.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}
?>