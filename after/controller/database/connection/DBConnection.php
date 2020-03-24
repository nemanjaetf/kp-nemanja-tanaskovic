<?php

class DBConnection {

    private $dbConnectionInterface;
 
    function __construct(DBConnectionInterface $dbConnectionInterface) {
        $this->dbConnectionInterface = $dbConnectionInterface;
    }
    
    function connect() {
        return $this->dbConnectionInterface->connect();
    }

}