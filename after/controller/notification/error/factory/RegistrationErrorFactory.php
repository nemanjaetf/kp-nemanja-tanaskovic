<?php

class RegistrationErrorFactory implements RegistrationErrorFactoryInterface {
    public function createError($typeOfError) : InfoMessage {
        $error = new InfoMessage();
        $error->setSuccess(false);
        $error->setError($typeOfError);
        return $error;
    }
}