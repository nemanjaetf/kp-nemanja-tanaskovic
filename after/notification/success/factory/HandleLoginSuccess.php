<?php

class HandleLoginSuccess {

    public function handle($userId) {
        $loginSuccessFactory = new LoginSuccessFactory();
        $formatter = new JsonMessageFormatter();
        $jsonSuccess = $loginSuccessFactory->createSuccess($userId);
        echo json_encode($formatter->format($jsonSuccess));
    }

}