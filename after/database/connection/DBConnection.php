<?php

class DBConnection {

    private $dbConnectionInterface;
 
    function __construct(DBConnectionInterface $dbConnectionInterface) {
        $this->dbConnectionInterface = $dbConnectionInterface;
    }
 
    function connect($host, $username, $password, $database) {
        return $this->dbConnectionInterface->connect($host, $username, $password, $database);
    }

}