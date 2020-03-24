<?php

class MySQLDatabaseConnection implements DBConnectionInterface {
    
    public function connect() {
        $mySQLFactory = new MySQLFactory();
        $mySQLObj = $mySQLFactory->createMySQLObject();

        $link = mysqli_connect(
            $mySQLObj->getHost(),
            $mySQLObj->getUsername(),
            $mySQLObj->getPassword(),
            $mySQLObj->getDb()
        );

        // Perform validation over connection.
        $mysqlDbConn = new MySQLConnectionValidation();
        $mysqlDbConnValidation = new DBConnectionValidation($mysqlDbConn);
        return $mysqlDbConnValidation->validateConnection($link);
    }

}