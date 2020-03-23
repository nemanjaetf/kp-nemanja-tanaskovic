<?php

interface RegistrationErrorFactoryInterface {
    public function createError($type_of_error) : InfoMessage;
}