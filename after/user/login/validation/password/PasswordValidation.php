<?php

class PasswordValidation implements UserPasswordValidationInterface {

    public function validate_user_password($password) {
        if (empty($password) || mb_strlen($password) < 8) {
            $err = new HandleLoginError();
            $err->handle('password');
        }
    }

    public function validate_user_password2($password) {
        if (empty($password) || mb_strlen($password) < 8) {
            $err = new HandleLoginError();
            $err->handle('password2');
        }
    }

    public function validate_match($password, $password2) {
        if ($password != $password2) {
            $err = new HandleLoginError();
            $err->handle('password_mismatch');
        }
    }

}