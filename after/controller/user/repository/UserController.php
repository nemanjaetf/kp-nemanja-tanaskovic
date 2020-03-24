<?php

class UserController {

    public function find($link, $email) {
        $userRepositoryImpl = new UserRepositoryImpl();
        $userRepository = new UserRepository($userRepositoryImpl);
        $userRepository->find($link, $email);
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