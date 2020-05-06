<?php
/**
 * createproduct.php
 * Displays a form to fill out in order to insert a new product into the products table.
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Create Product</title>
    </head>
    <body>
        <h3>Create Product</h3>
        <form action="../Provider_2/classes/create_product.php" method="POST">
            <label for="name-textbox">Product Name: </label>
            <input type="text" name="name-textbox" id="name-textbox"/>
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
			
            <input type="submit"/>
			
        </form>
    </body>
</html>