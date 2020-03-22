<?php

class EmptyEmailValidation implements UserEmailValidationInterface {

    public function validate_user_email($email) {
        if (empty($email)) {
            $err = new HandleLoginError();
            $err->handle('email');
        }
    }

}