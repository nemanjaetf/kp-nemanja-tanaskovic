<?php

interface UserPasswordValidationInterface {

    public function validate_user_password($password);

    public function validate_user_password2($password2);

    public function validate_match($password, $password2);

}