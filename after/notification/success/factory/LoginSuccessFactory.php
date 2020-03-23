<?php

class LoginSuccessFactory implements LoginSuccessFactoryInterface {
    public function createSuccess($userId) : InfoMessage {
        $success = new InfoMessage();
        $success->setSuccess(true);
        $success->setUserId($userId);
        return $success;
    }
}