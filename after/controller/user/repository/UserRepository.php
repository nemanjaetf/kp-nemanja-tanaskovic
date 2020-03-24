<?php

class UserRepository {

    private $userRepositoryInterface;
 
    function __construct(UserRepositoryInterface $userRepositoryInterface) {
        $this->userRepositoryInterface = $userRepositoryInterface;
    }
 
    function find($link, $email) {
        $result = $this->userRepositoryInterface->find($link, $email);

        $UserExistValidation = new UserExistValidation();
        $userRepositoryValidation = new UserRepositoryValidation($UserExistValidation);

        // Check if this user already exist in our database.
        $userRepositoryValidation->userExist($result);
    }

    function addUser($link, $email, $password) {
        return $this->userRepositoryInterface->addUser($link, $email, $password);
    }

    function getUserId($link) {
        return $this->userRepositoryInterface->getUserId($link);
    }

}