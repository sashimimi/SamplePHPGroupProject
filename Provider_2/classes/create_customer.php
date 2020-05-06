<?php
require_once 'database.php';

/**
 * create_customer.php
 * Inserts a new customer into the customers table based off of user input from a POST.
 */
if($_POST)
{
    $fname = $_POST['first-name-textbox'];
    $lname = $_POST['last-name-textbox'];
    $email = $_POST['email-textbox'];
    $favPet = $_POST['fav-pet-textbox'];

    $sql = "INSERT INTO customers (first_name, last_name, email, fave_pet) VALUES ('$fname', '$lname', '$email', '$favPet')";
    if($connect->query($sql) === TRUE)
    {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../../Client_2/viewallcustomers.php'><button type='button'>Back</button></a>";
    }
    else {
        echo "Error ". $sql. ' '. $connect->connect_error;
    }
    $connect->close();

}
?>