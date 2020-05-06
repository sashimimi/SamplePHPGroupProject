<?php
require_once '../classes/database.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Scrum Project 3</title>
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
                <a href="../../Client_2/index.html">Home</a>
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

                echo "<br/>";
                echo "----------------------------------------------";
                echo "<br/>";

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

                echo "<br/>";
                echo "----------------------------------------------";
                echo "<br/>";

                $SQL = "SELECT * FROM products";

                if ($result = $connect->query($SQL))
                {
                    if ($result->num_rows > 0)
                    {
                        echo "<table>";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th>#</th>";
                                echo "<th>Name</th>";
                                echo "<th>Description</th>";
                                echo "<th>Price</th>";
								echo "<th>Color</th>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while($row = $result->fetch_array()){
                            echo "<tr>";
                                echo "<td>" . $row['product_id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['description'] . "</td>";
                                echo "<td>" . $row['price'] . "</td>";
								echo "<td>" . $row['color'] . "</td>";
                                echo "<td>";
                                    echo "<a href='viewproduct.php?product_id=". $row['product_id'] ."' title='View Record'><span>View</span></a>";
                                    echo "<a href='updateproduct.php?product_id=". $row['product_id'] ."' title='Update Record'><span>Update</span></a>";
                                    echo "<a href='deleteproduct.php?product_id=". $row['product_id'] ."' title='Delete Record'><span>Delete</span></a>";
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