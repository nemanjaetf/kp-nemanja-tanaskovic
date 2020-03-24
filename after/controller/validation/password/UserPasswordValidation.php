<?php

class UserPasswordValidation {

    private $userPasswordValidationInterface;
 
    function __construct(UserPasswordValidationInterface $userPasswordValidationInterface) {
        $this->userPasswordValidationInterface = $userPasswordValidationInterface;
    }
 
    function validateUserPassword($password) {
        return $this->userPasswordValidationInterface->validateUserPassword($password);
    }

    function validateUserPassword2($password2) {
        return $this->userPasswordValidationInterface->validateUserPassword2($password2);
    }

    function validateMatch($password, $password2) {
        return $this->userPasswordValidationInterface->validateMatch($password, $password2);
    }

}