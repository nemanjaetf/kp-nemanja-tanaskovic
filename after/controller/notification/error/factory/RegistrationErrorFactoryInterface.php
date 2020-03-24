<?php

interface RegistrationErrorFactoryInterface {
    public function createError($typeOfError) : InfoMessage;
}