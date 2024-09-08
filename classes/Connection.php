<?php
class Connection
{
    private static $connect = NULL;
    public static function getInstance()
    {
        if (Connection::$connect === NULL) {
            $host = "localhost";
            $database = "wkshp_db";
            $username = "root";
            $password = "";
            $dsn = "mysql:host=" . $host . ";dbname=" . $database;
            Connection::$connect = new PDO($dsn, $username, $password);
            if (!Connection::$connect) {
                die("Could not Connect to the Database.");
            }
        }
        return Connection::$connect;
    }
    public static function getMySQLDate($date)
    {
        $date_arr  = explode('-', $date);
        return $date_arr[2] . '-' . $date_arr[1] . '-' . $date_arr[0];
    }
}
