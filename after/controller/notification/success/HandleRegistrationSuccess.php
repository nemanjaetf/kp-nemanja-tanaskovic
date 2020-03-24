<?php

class HandleRegistrationSuccess {

    public function showMessage($userId) {
        $registrationSuccessFactory = new RegistrationSuccessFactory();
        $formatter = new JsonMessageFormatter();
        $jsonSuccess = $registrationSuccessFactory->createSuccess($userId);
        echo json_encode($formatter->formatMsgToJson($jsonSuccess));
    }

}