<?php

class HandleRegistrationSuccess {

    public function handle($userId) {
        $registrationSuccessFactory = new RegistrationSuccessFactory();
        $formatter = new JsonMessageFormatter();
        $jsonSuccess = $registrationSuccessFactory->createSuccess($userId);
        echo json_encode($formatter->format($jsonSuccess));
    }

}