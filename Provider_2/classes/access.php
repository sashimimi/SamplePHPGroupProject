<?php
require_once 'database.php';

/**
 * access.php
 * This class provides functions to work with general database functionality.
 * 
 * see: index.php
 * see: display.php
 */

class Access
{
    private static $connect;
	private static $hostName = "localhost";
	private static $databaseName = "mockstore";
	private static $userName = "root";
    private static $password = "";
    
    public function connect()
    {
		self::$connect = new mysqli(self::$hostName, self::$userName, self::$password, self::$databaseName );
		if (self::$connect->connect_error) {
			return("Connect Error to " . self::$hostName);
        }
		return("Connection successful to hostName = " . self::$hostName . ", databaseName = " . self::$databaseName);
   				
    }

    /**
     * showTables()
     * This function will show all existing tables from a database named 'mockstore'.
     * 
     * returns  The results of the query (all tables from 'mockstore')
     */
    public function showTables()
    {
        self::connect();
        $SQL = "SHOW TABLES FROM mockstore";
        $result = $connect->query($SQL);
        $connect->close();
        return $result;
    }

    /**
     * displayRecords()
     * This function will show all existing records from a specified table.
     * 
     * $table   The table to display records of
     * 
     * returns  The results of the query (all records from $table)
     */
    public function displayRecords($table)
    {
        self::connect();
        $SQL = "SELECT * FROM " . $table;
        $result = mysqli_query(self::$connect, $SQL);
        self::$connect->close();
        return $result;
    }
    
    public function displayOne($id)
    {
        self::connect();
        $SQL = "SELECT * FROM " . $table."WHERE product_id = ".$id; 
        $result = mysqli_query(self::$connect, $SQL);
        self::$connect->close();
        return $result;
    }
}

?>