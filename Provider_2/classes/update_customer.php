<?php
require_once 'database.php';

/**
 * update_customer.php
 * Updates an existing customer from the customers table based off of user input from a POST.
 */
if ($_POST['cust_id'])
{
    $fname = $_POST['first-name-textbox'];
    $lname = $_POST['last-name-textbox'];
    $email = $_POST['email-textbox'];
    $favPet = $_POST['fav-pet-textbox'];

    $id = $_POST['cust_id'];

    $sql = "UPDATE customers SET first_name = '$fname', last_name = '$lname', email = '$email', fave_pet = '$favPet' WHERE cust_id = '$id'";  
    if($connect->query($sql) === TRUE)
    {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../../Client_2/viewallcustomers.php'><button type='button'>Back</button></a>";
    }
    else {
        echo "Error while updating record: " .$connect->error;
    }
    $connect->close();
}
?>