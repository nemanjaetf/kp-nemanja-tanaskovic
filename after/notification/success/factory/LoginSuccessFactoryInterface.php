<?php

interface LoginSuccessFactoryInterface {
    public function createSuccess($userId) : InfoMessage;
}