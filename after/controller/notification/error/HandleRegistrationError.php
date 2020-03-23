<?php

class HandleRegistrationError {

    public function handle($type_of_error) {
        $err = new RegistrationErrorFactory();
        $formatter = new JsonMessageFormatter();
        $jsonErr = $err->createError($type_of_error);
        echo json_encode($formatter->format($jsonErr));
        exit;
    }

}