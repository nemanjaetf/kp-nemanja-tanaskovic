<?php

class UserRepository {

    private $userRepositoryInterface;
 
    function __construct(UserRepositoryInterface $userRepositoryInterface) {
        $this->userRepositoryInterface = $userRepositoryInterface;
    }
 
    function find($link, $email) {
        return $this->userRepositoryInterface->find($link, $email);
    }

    function addUser($link, $email, $password) {
        return $this->userRepositoryInterface->addUser($link, $email, $password);
    }

}