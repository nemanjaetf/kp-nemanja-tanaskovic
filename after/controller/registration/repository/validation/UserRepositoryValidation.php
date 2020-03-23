<?php

class UserRepositoryValidation {

    private $userRepositoryValidationInterface;
 
    function __construct(UserRepositoryValidationInterface $userRepositoryValidationInterface) {
        $this->userRepositoryValidationInterface = $userRepositoryValidationInterface;
    }
 
    function user_exist($results) {
        return $this->userRepositoryValidationInterface->user_exist($results);
    }

}