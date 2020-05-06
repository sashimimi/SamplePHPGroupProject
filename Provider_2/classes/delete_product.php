<?php 
 
require_once 'database.php';
 
if($_POST) {
    $id = $_POST['product_id'];
 
    $sql = "DELETE FROM products WHERE product_id = {$id}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Successfully removed!!</p>";
        echo "<a href='../../Client_2/viewallproducts.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $connect->error;
    }
 
    $connect->close();
}
 
?>