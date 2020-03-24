<?php

class DBConnectionValidation {

    private $dbConnectionValidationInterface;
 
    function __construct(DBConnectionValidationInterface $dbConnectionValidationInterface) {
        $this->dbConnectionValidationInterface = $dbConnectionValidationInterface;
    }
 
    function validateConnection($link) {
        return $this->dbConnectionValidationInterface->validateConnection($link);
    }

}