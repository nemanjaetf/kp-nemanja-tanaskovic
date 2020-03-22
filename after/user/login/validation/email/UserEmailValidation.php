<?php

class UserEmailValidation {

    private $userEmailValidationInterface;
 
    function __construct(UserEmailValidationInterface $userEmailValidationInterface) {
        $this->userEmailValidationInterface = $userEmailValidationInterface;
    }
 
    function validate_user_email($email) {
        return $this->userEmailValidationInterface->validate_user_email($email);
    }

    function validate_email_template($email) {
        return $this->userEmailValidationInterface->validate_email_template($email);
    }

}