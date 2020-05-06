<?php
/**
 * updateproduct.php
 * Displays a form to fill out in order to update a new product into the products table.
 */
 require_once '../Provider_2/classes/database.php';
 
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
        <title>Update Product</title>
    </head>
    <body>
        <h3>Update Product</h3>
        <form action="../Provider_2/classes/update_product.php" method="POST">
            <label for="name-textbox">Product Name: </label>
            <input type="text" name="name-textbox" id="name-textbox"  />
            <br/><br/>
            <label for="description-textbox">Product Description: </label>
            <input type="text" name="description-textbox" id="description-textbox"/>
            <br/><br/>
            <label for="price-textbox">Product Price: </label>
            <input type="text" name="price-textbox" id="price-textbox"/>
			<br/><br/>
			<label for="color-textbox">Product Color: </label>
            <input type="text" name="color-textbox" id="color-textbox"/>
            <br/><br/><br/>
            <input type="hidden" name="product_id" value="<?php echo $data['product_id'] ?>" />
            <input type="submit"/>
			<a href="viewallproducts.php"><button type="button">Back</button></a>
        </form>
    </body>
</html>