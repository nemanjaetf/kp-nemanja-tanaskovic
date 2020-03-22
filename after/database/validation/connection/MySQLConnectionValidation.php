<?php

class MySQLConnectionValidation implements DBConnectionValidationInterface {

    public function validate_connection($link) {
        if (!$link) {
            $err = new HandleLoginError();
            $err->handle('DB_error');
        }
    }

}