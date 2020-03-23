<?php

class MysqliNumRowsValidation implements UserRepositoryValidationInterface {

    public function user_exist($result) {
        if ($result && mysqli_num_rows($result)) {
            $err = new HandleRegistrationError();
            $err->handle('password_mismatch');
        }
    }

}