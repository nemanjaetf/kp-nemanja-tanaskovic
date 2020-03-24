<?php

class UserEmailValidation {

    private $userEmailValidationInterface;
 
    function __construct(UserEmailValidationInterface $userEmailValidationInterface) {
        $this->userEmailValidationInterface = $userEmailValidationInterface;
    }
 
    function validateUserEmal($email) {
        return $this->userEmailValidationInterface->validateUserEmal($email);
    }

    function validateEmailTemplate($email) {
        return $this->userEmailValidationInterface->validateEmailTemplate($email);
    }

}