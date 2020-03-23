<?php

class UserPasswordValidation {

    private $userPasswordValidationInterface;
 
    function __construct(UserPasswordValidationInterface $userPasswordValidationInterface) {
        $this->userPasswordValidationInterface = $userPasswordValidationInterface;
    }
 
    function validate_user_password($password) {
        return $this->userPasswordValidationInterface->validate_user_password($password);
    }

    function validate_user_password2($password2) {
        return $this->userPasswordValidationInterface->validate_user_password2($password2);
    }

    function validate_match($password, $password2) {
        return $this->userPasswordValidationInterface->validate_match($password, $password2);
    }

}