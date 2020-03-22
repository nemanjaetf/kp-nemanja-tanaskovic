<?php

class DBConnectionValidation {

    private $dbConnectionValidationInterface;
 
    function __construct(DBConnectionValidationInterface $dbConnectionValidationInterface) {
        $this->dbConnectionValidationInterface = $dbConnectionValidationInterface;
    }
 
    function validate_connection($link) {
        return $this->dbConnectionValidationInterface->validate_connection($link);
    }

}