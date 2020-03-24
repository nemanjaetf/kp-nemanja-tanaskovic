<?php

class RegistrationValidationController {

    // Register each validation method for user registration.
    public function validate($userRegistration) {
        $emailValidation = new EmailValidation();
        $userEmailValidation = new UserEmailValidation($emailValidation);
        $userEmailValidation->validateUserEmal($userRegistration->getEmail());
        $userEmailValidation->validateEmailTemplate($userRegistration->getEmail());
        
        $pwValidation = new PasswordValidation();
        $userPasswordValidation = new UserPasswordValidation($pwValidation);
        $userPasswordValidation->validateUserPassword($userRegistration->getPassword());
        $userPasswordValidation->validateUserPassword2($userRegistration->getPassword2());
        $userPasswordValidation->validateMatch($userRegistration->getPassword(), $userRegistration->getPassword2());
    }

}