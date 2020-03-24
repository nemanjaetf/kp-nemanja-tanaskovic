<?php

class DBConnectController {

    public function connectToMySQL() {
        $mysqlDbConn = new MySQLDatabaseConnection();
        $dbConn = new DBConnection($mysqlDbConn);
        return $dbConn->connect();
    }

}