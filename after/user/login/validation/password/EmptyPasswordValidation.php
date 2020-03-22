<?php

class EmptyPasswordValidation implements UserPasswordValidationInterface {

    public function validate_user_password($password) {
        if (empty($password) || mb_strlen($password) < 8) {
            $err = new HandleLoginError();
            $err->handle('password');
        }
    }

}