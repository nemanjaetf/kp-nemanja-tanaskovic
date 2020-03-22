<?php

class LoginErrorFactory implements LoginErrorFactoryInterface {
    public function createError($type_of_error) : InfoMessage {
        $error = new InfoMessage();
        $error->setSuccess(false);
        $error->setError($type_of_error);
        return $error;
    }
}