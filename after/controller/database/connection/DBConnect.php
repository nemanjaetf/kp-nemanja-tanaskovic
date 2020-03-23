<?php

class DBConnect implements DBConnectionInterface {

    public function connect($host, $username, $password, $database) {
        $mysqlDbConn = new MySQLDatabaseConnection();
        $dbConn = new DBConnection($mysqlDbConn);
        return $dbConn->connect($host, $username, $password, $database);
    }

}