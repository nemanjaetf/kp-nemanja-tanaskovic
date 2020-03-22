<?php

class UserRepositoryImpl implements UserRepositoryInterface {

    public function find($email) {
        return "SELECT * FROM user WHERE email = '$email'";
    }

}