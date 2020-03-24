<?php

class RegistrationController {

    public function validate(UserRegistration $userRegistration) {
        $registrationValidation = new RegistrationValidationController();
        $registrationValidation->validate($userRegistration);
    }

}