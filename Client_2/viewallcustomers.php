<?php
require_once '../Provider_2/classes/database.php';

/**
 * viewallcustomers.php
 * Lists all customers.
 * Allows view single customer, update customer, and delete customer options for each record.
 * Allows add new customer option.
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>View All Customers</title>
        <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="page-header">
                <h3>Customers List</h3>
                <a href="createcustomer.php">Add New Customer</a>
                <a href="index.html">Home</a>
            </div> 
            <br/>
            <?php
                $SQL = "SELECT * FROM customers";

                if ($result = $connect->query($SQL))
                {
                    if ($result->num_rows > 0)
                    {
                        echo "<table>";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th>#</th>";
                                echo "<th>First Name</th>";
                                echo "<th>Last Name</th>";
                                echo "<th>Email</th>";
                                echo "<th>Favorite Pet</th>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while($row = $result->fetch_array()){
                            echo "<tr>";
                                echo "<td>" . $row['cust_id'] . "</td>";
                                echo "<td>" . $row['first_name'] . "</td>";
                                echo "<td>" . $row['last_name'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['fave_pet'] . "</td>";
                                echo "<td>";
                                    echo "<a href='viewcustomer.php?cust_id=". $row['cust_id'] ."' title='View Record'><span>View</span></a>";
                                    echo "<a href='updatecustomer.php?cust_id=". $row['cust_id'] ."' title='Update Record'><span>Update</span></a>";
                                    echo "<a href='deletecustomer.php?cust_id=". $row['cust_id'] ."' title='Delete Record'><span>Delete</span></a>";
                                echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";                            
                    echo "</table>";
                    // Free result set
                    $result->free();
                    }
                    else
                    {
                        echo "<p><em>No records were found.</em></p>";
                    }
                }

                $connect->close();
            ?>
        </div>
    </body>
</html>