<?php
/**
 * createcustomer.php
 * Displays a form to fill out in order to insert a new customer into the customers table.
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Create Customer</title>
    </head>
    <body>
        <h3>Create Customer</h3>
        <form action="../Provider_2/classes/create_customer.php" method="POST">
            <label for="first-name-textbox">First Name: </label>
            <input type="text" name="first-name-textbox" id="first-name-textbox"/>
            <br/><br/>
            <label for="last-name-textbox">Last Name: </label>
            <input type="text" name="last-name-textbox" id="last-name-textbox"/>
            <br/><br/><br/>
            <label for="email-textbox">Email: </label>
            <input type="text" name="email-textbox" id="email-textbox"/>
            <br/><br/><br/>
            <label for="fav-pet-textbox">Favorite Pet: </label>
            <input type="text" name="fav-pet-textbox" id="fav-pet-textbox"/>
            <br/><br/><br/>
            <input type="submit"/>
        </form>
    </body>
</html>