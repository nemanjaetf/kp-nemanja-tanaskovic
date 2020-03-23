<?php

class UserRegistration {

    private $email;

    private $password;

    private $password2;
    
    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword2(string $password2) {
        $this->password2 = $password2;
    }

    public function getPassword2() {
        return $this->password2;
    }
    
}