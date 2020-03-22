<?php

class MysqliNumRowsValidation implements UserRepositoryValidationInterface {

    public function validate_results($result) {
        // TODO : Check this condition
        if ($result && mysqli_num_rows($result)) {
            $err = new HandleLoginError();
            $err->handle('password_mismatch');
        }
    }

}