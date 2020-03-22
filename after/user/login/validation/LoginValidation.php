<?php

class LoginValidation {

    // Register each validation method for user login.
    public function validate($email, $password, $password2) {
        $emptyEmailValidation = new EmptyEmailValidation();
        $userEmailValidation = new UserEmailValidation($emptyEmailValidation);
        $userEmailValidation->validate_user_email($email);

        $emailTemplateValidation = new EmailTemplateValidation();
        $userEmailValidation = new UserEmailValidation($emailTemplateValidation);
        $userEmailValidation->validate_user_email($email);

        $emptyPasswordValidation = new EmptyPasswordValidation();
        $userPasswordValidation = new UserPasswordValidation($emptyPasswordValidation);
        $userPasswordValidation->validate_user_password($password);

        $emptyPassword2Validation = new EmptyPasswordValidation();
        $userPasswordValidation = new UserPasswordValidation($emptyPassword2Validation);
        $userPasswordValidation->validate_user_password($password2);

        $passwordMatch = new PasswordMatchValidation();
        $passwordMatch->validate_match($password, $password2);
    }

}