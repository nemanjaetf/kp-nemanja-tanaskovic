<?php

interface UserPasswordValidationInterface {

    public function validateUserPassword($password);

    public function validateUserPassword2($password2);

    public function validateMatch($password, $password2);

}