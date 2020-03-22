<?php

class UserRepositoryValidation {

    private $userRepositoryValidationInterface;
 
    function __construct(UserRepositoryValidationInterface $userRepositoryValidationInterface) {
        $this->userRepositoryValidationInterface = $userRepositoryValidationInterface;
    }
 
    function validate_results($results) {
        return $this->userRepositoryValidationInterface->validate_results($results);
    }

}