<?php
require_once '../Provider_2/classes/database.php';

/**
 * viewallproducts.php
 * Lists all products.
 * Allows view single product, update product, and delete product options for each record.
 * Allows add new product option.
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>View All Products</title>
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
                <h3>Product List</h3>
                <a href="createproduct.php">Add New Product</a>
                <a href="index.html">Home</a>
            </div> 
            <br/>
            <?php
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