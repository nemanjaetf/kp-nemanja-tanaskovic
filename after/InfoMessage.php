<?php

class InfoMessage {

    public $success;

    public $error;

    public $userId;
    
    public function setSuccess(bool $success) {
        $this->success = $success;
    }

    public function isSuccess() {
        return $this->success;
    }

    public function setError(string $error) {
        $this->error = $error;
    }

    public function getError() {
        return $this->error;
    }

    public function setUserId(string $userId) {
        $this->userId = $userId;
    }

    public function getUserId() {
        return $this->userId;
    }

}