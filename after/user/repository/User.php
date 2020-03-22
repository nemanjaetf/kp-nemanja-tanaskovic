<?php

class User implements UserRepositoryInterface {

    public function find($link, $email) {
        $user = new UserRepositoryImpl();
        $u = new UserRepository($user);
        $result = $u->find($link, $email);

        $mysqliNumRowsValidation = new MysqliNumRowsValidation();
        $userRepositoryValidation = new UserRepositoryValidation($mysqliNumRowsValidation);
        $userRepositoryValidation->validate_results($result);
    }

    public function addUser($link, $email, $password) {
        $user = new UserRepositoryImpl();
        $u = new UserRepository($user);
        $u->addUser($link, $email, $password);
    }

}