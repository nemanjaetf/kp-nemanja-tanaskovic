<?php

class UserLogsController {

    public function init($link, $userId) {
        $userLogsRepositoryImpl = new UserLogsRepositoryImpl();
        $userLogsRepository = new UserLogsRepository($userLogsRepositoryImpl);
        $userLogsRepository->addNewRegisterUserLog($link, $userId);
    }

}