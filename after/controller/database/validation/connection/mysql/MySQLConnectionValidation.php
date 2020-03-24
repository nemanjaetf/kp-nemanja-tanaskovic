<?php

class MySQLConnectionValidation implements DBConnectionValidationInterface {

    public function validateConnection($link) {
        if (!$link) {
            $err = new HandleRegistrationError();
            $err->showMessage('DB_error');
        }

        return $link;
    }

}