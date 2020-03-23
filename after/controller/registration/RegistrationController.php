<?php

class RegistrationController {

    public function init(UserRegistration $userRegistration) {
        $registrationValidation = new RegistrationValidation();
        $registrationValidation->validate(
            $userRegistration->getEmail(),
            $userRegistration->getPassword(),
            $userRegistration->getPassword2()
        );
    }

}