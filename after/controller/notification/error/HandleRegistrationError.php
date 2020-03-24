<?php

class HandleRegistrationError {

    public function showMessage($typeOfError) {
        $err = new RegistrationErrorFactory();
        $formatter = new JsonMessageFormatter();
        $jsonErr = $err->createError($typeOfError);
        echo json_encode($formatter->formatMsgToJson($jsonErr));
        exit;
    }

}