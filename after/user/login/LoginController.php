<?php

class LoginController {

    public function init(UserLogin $userLogin) {
        $loginValidation = new LoginValidation();
        $loginValidation->validate(
            $userLogin->getEmail(),
            $userLogin->getPassword(),
            $userLogin->getPassword2()
        );
    }

}