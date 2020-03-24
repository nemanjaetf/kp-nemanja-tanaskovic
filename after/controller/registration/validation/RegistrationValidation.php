<?php

class RegistrationValidation {

    // Register each validation method for user registration.
    public function validate($email, $password, $password2) {
        $emailValidation = new EmailValidation();
        $userEmailValidation = new UserEmailValidation($emailValidation);
        $userEmailValidation->validateUserEmal($email);
        $userEmailValidation->validateEmailTemplate($email);
        
        $pwValidation = new PasswordValidation();
        $userPasswordValidation = new UserPasswordValidation($pwValidation);
        $userPasswordValidation->validateUserPassword($password);
        $userPasswordValidation->validateUserPassword2($password2);
        $userPasswordValidation->validateMatch($password, $password2);
    }

}