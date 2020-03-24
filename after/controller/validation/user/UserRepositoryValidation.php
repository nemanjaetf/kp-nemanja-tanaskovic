<?php

class UserRepositoryValidation {

    private $userRepositoryValidationInterface;
 
    function __construct(UserRepositoryValidationInterface $userRepositoryValidationInterface) {
        $this->userRepositoryValidationInterface = $userRepositoryValidationInterface;
    }
 
    function userExist($results) {
        return $this->userRepositoryValidationInterface->userExist($results);
    }

}