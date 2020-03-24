<?php

class UserExistValidation implements UserRepositoryValidationInterface {

    public function userExist($result) {
        if ($result && mysqli_num_rows($result)) {
            $err = new HandleRegistrationError();
            $err->showMessage('password_mismatch');
        }
    }

}