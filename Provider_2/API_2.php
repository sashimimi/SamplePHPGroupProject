<?php
require_once '../Provider_2/classes/database.php';
require_once '../Provider_2/classes/access.php';

/**
 * API_2.php
 * This file provides JSON responses for each of the client requests for all tables.
 * 
 * (It most likely prints json responses from inserting, reading, updating, and deleting records for all three tables).
 */

$DB_Access = new Access(); 

$key = $_REQUEST['tableName'];

$DB_Result = $DB_Access->displayRecords($key);

$data = array();

$index = 0;
while($row = $DB_Result->fetch_assoc())
{ $rValue = "";
  foreach($row as $value)
      {$rValue = $rValue . "$value ";}
  $data[] = $rValue;
}

print(json_encode($data));


?>