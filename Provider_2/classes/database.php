<?php

/**
 * database.php
 * This file connects to the database 'mockstore' using mysqli.
 */

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mockstore');
 
$connect = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($connect === false){
    die("ERROR: Could not connect. " . $connect->connect_error);
}
?>