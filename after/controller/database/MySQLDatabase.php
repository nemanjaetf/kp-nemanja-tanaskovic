<?php

class MySQLDatabase implements DatabaseInterface {

    // Initialize and validate connection to the database.
    public function init() {
        $mySQLFactory = new MySQLFactory();
        $mySQL = $mySQLFactory->createMySQLObject();
        
        $db = new DBConnect();
        $link = $db->connect(
            $mySQL->getHost(),
            $mySQL->getUsername(),
            $mySQL->getPassword(), 
            $mySQL->getDb()
        );

        // Perform validation over connection.
        $mysqlDbConn = new MySQLConnectionValidation();
        $mysqlDbConnValidation = new DBConnectionValidation($mysqlDbConn);
        return $mysqlDbConnValidation->validate_connection($link);
    }

}