<?php

class PasswordMatchValidation {

    public function validate_match($password, $password2) {
        if ($password != $password2) {
            $err = new HandleLoginError();
            $err->handle('password_mismatch');
        }
    }

}