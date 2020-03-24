<?php

class PasswordValidation implements UserPasswordValidationInterface {

    public function validateUserPassword($password) {
        if (empty($password) || mb_strlen($password) < 8) {
            $err = new HandleRegistrationError();
            $err->showMessage('password');
        }
    }

    public function validateUserPassword2($password) {
        if (empty($password) || mb_strlen($password) < 8) {
            $err = new HandleRegistrationError();
            $err->showMessage('password2');
        }
    }

    public function validateMatch($password, $password2) {
        if ($password != $password2) {
            $err = new HandleRegistrationError();
            $err->showMessage('password_mismatch');
        }
    }

}