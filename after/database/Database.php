<?php

class Database {

    // Initialize and validate connection to the database.
    public function init() {
        $db = new DBConnect();
        $mySQLFactory = new MySQLFactory();
        $mySQL = $mySQLFactory->createMySQL();

        $link = $db->connect(
            $mySQL->getHost(),
            $mySQL->getUsername(),
            $mySQL->getPassword(), 
            $mySQL->getDb()
        );

        // Perform validation over connection.
        $mysqlDbConn = new MySQLConnectionValidation();
        $mysqlDbConnValidation = new DBConnectionValidation($mysqlDbConn);
        $mysqlDbConnValidation->validate_connection($link);
    }

}