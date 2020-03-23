<?php

class UserLogsRepository {

    private $userLogsRepositoryInterface;
 
    function __construct(UserLogsRepositoryInterface $userLogsRepositoryInterface) {
        $this->userLogsRepositoryInterface = $userLogsRepositoryInterface;
    }
 
    function addNewRegisterUserLog($link, $userId) {
        return $this->userLogsRepositoryInterface->addNewRegisterUserLog($link, $userId);
    }

}