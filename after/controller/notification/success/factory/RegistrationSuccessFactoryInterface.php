<?php

interface RegistrationSuccessFactoryInterface {
    public function createSuccess($userId) : InfoMessage;
}