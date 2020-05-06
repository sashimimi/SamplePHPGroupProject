<?php
require_once 'database.php';

/**
 * create_product.php
 * Creates a new product in the products table based off of user input from a POST.
 */

 
if($_POST) {
    $name = $_POST['name-textbox'];
    $description = $_POST['description-textbox'];
    $price = $_POST['price-textbox'];
    $color = $_POST['color-textbox'];
	
 
    $sql = "INSERT INTO products (name, description, price, color) VALUES ('$name', '$description', '$price', '$color')";
    if($connect->query($sql) === TRUE) {
		
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../../Client_2/viewallproducts.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 
?>