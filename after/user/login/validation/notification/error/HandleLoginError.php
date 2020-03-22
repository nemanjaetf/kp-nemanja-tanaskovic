<?php

class HandleLoginError {

    public function handle($type_of_error) {
        $err = new LoginErrorFactory();
        $formatter = new JsonMessageFormatter();
        $jsonErr = $err->createError($type_of_error);
        echo json_encode($formatter->format($jsonErr));
        // {TODO} : Remove die();
        // die();
        
        // exit;
    }

}