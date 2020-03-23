<?php

class UserController implements UserRepositoryInterface {

    public function find($link, $email) {
        $userRepositoryImpl = new UserRepositoryImpl();
        $userRepository = new UserRepository($userRepositoryImpl);
        $result = $userRepository->find($link, $email);

        $mysqliNumRowsValidation = new MysqliNumRowsValidation();
        $userRepositoryValidation = new UserRepositoryValidation($mysqliNumRowsValidation);

        // Check if this user already exist in our database.
        $userRepositoryValidation->user_exist($result);
    }

    public function addUser($link, $email, $password) {
        $userRepositoryImpl = new UserRepositoryImpl();
        $userRepository = new UserRepository($userRepositoryImpl);
        $userRepository->addUser($link, $email, $password);
    }

    public function getUserId($link) {
        $userRepositoryImpl = new UserRepositoryImpl();
        $userRepository = new UserRepository($userRepositoryImpl);
        return $userRepository->getUserId($link);
    }

}