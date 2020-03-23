<?php

class RegistrationSuccessFactory implements RegistrationSuccessFactoryInterface {
    public function createSuccess($userId) : InfoMessage {
        $success = new InfoMessage();
        $success->setSuccess(true);
        $success->setUserId($userId);
        return $success;
    }
}