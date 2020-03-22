<?php

class LoginValidation {

    // Register each validation method for user login.
    public function validate($email, $password, $password2) {
        $emailValidation = new EmailValidation();
        $userEmailValidation = new UserEmailValidation($emailValidation);
        $userEmailValidation->validate_user_email($email);
        $userEmailValidation->validate_email_template($email);
        
        $pwValidation = new PasswordValidation();
        $userPasswordValidation = new UserPasswordValidation($pwValidation);
        $userPasswordValidation->validate_user_password($password);
        $userPasswordValidation->validate_user_password2($password2);
        $userPasswordValidation->validate_match($password, $password2);
    }

}