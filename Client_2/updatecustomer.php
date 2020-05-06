<?php
/**
 * updatecustomer.php
 * Displays a form to fill out in order to update an existing customer in the customers table
 * based off of a customer ID retrieved from a GET.
 */
require_once '../Provider_2/classes/database.php';

if($_GET['cust_id'])
{
    $id = $_GET['cust_id'];
    $sql = "SELECT * FROM customers WHERE cust_id = '$id'";

    $result = $connect->query($sql);
    $data = $result->fetch_assoc();

    $connect->close();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Customer</title>
    </head>
    <body>
    <h3>Update Customer</h3>
        <form action="../Provider_2/classes/update_customer.php" method="POST">
            <label for="first-name-textbox">First Name: </label>
            <input type="text" name="first-name-textbox" value="<?php echo $data['first_name'] ?>"/>
            <br/><br/>
            <label for="last-name-textbox">Last Name: </label>
            <input type="text" name="last-name-textbox" value="<?php echo $data['last_name'] ?>" />
            <br/><br/><br/>
            <label for="last-name-textbox">Email: </label>
            <input type="text" name="email-textbox" value="<?php echo $data['email'] ?>" />
            <br/><br/><br/>
            <label for="last-name-textbox">Favorite Pet: </label>
            <input type="text" name="fav-pet-textbox" value="<?php echo $data['fave_pet'] ?>" />
            <br/><br/><br/>
            <input type="hidden" name="cust_id" value="<?php echo $data['cust_id'] ?>" />
            <input type="submit"/>
        </form>
    </body>
</html>