<?php

class RegistrationErrorFactory implements RegistrationErrorFactoryInterface {
    public function createError($type_of_error) : InfoMessage {
        $error = new InfoMessage();
        $error->setSuccess(false);
        $error->setError($type_of_error);
        return $error;
    }
}