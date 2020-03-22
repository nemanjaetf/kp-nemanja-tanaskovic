<?php

class DBConnect {

    public function connect($host, $username, $password, $database) {
        $mysqlDbConn = new MySQLDatabaseConnection();
        $dbConn = new DBConnection($mysqlDbConn);
        $dbConn->connect($host, $username, $password, $database);
    }

}