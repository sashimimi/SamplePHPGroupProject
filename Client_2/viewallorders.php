<?php
require_once '../Provider_2/classes/database.php';

/**
 * viewallorders.php
 * Lists all orders.
 * Allows view single order, update order, and delete order options for each record.
 * Allows add new order option.
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>View All Orders</title>
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
                <h3>Orders</h3>
                <a href="createorder.php">Add New Order</a>
                <a href="index.html">Home</a>
            </div> 
            <br/>
            <?php
                $SQL = "SELECT * FROM orders";

                if ($result = $connect->query($SQL))
                {
                    if ($result->num_rows > 0)
                    {
                        echo "<table>";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th>Order ID</th>";
                                echo "<th>Customer ID</th>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while($row = $result->fetch_array()){
                            echo "<tr>";
                                echo "<td>" . $row['order_id'] . "</td>";
                                echo "<td>" . $row['f_cust_id'] . "</td>";
                                echo "<td>";
                                    echo "<a href='vieworder.php?order_id=". $row['order_id'] ."' title='View Record'><span>View</span></a>";
                                    echo "<a href='updateorder.php?order_id=". $row['order_id'] ."' title='Update Record'><span>Update</span></a>";
                                    echo "<a href='deleteorder.php?order_id=". $row['order_id'] ."' title='Delete Record'><span>Delete</span></a>";
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