<?php

class Database
{
    public static $conn=null;
    public static function getconnection()
    {
       if(Database::$conn == null)
       {
        $servername = "mysql.selfmade.ninja";
        $username = "kameshviki";
        $password = "createlogin#24";
        $dbname = "kameshviki_login";
        
        // Create connection
        $connection = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($connection->connect_error) {
          die("Connection failed: " . $connection->connect_error);
          //echo "connection failed";
        }else
        {
            printf("new connection establishing....");
            Database::$conn = $connection;
            return Database::$conn;
        }
       }
       else
       {
          print("returning old connection...");
          return Database::$conn;
       }
    }



}






?>