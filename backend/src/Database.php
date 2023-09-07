<?php

class Database
{
    private static $instance = null;

    private function __construct() {}

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new PDO('mysql:host=localhost:3306;dbname=quoridor', 'moritz', 'MH_Admin!');
        }

        return self::$instance;
    }
}

?>