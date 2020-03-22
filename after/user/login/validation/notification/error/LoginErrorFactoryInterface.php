<?php

interface LoginErrorFactoryInterface {
    public function createError($type_of_error) : InfoMessage;
}