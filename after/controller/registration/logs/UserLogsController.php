<?php

class UserLogsController {

    public function init($link, $userId) {
        // Add new data in user_logs table after new user registration.
        $userLogsRepositoryImpl = new UserLogsRepositoryImpl();
        $userLogsRepository = new UserLogsRepository($userLogsRepositoryImpl);
        $userLogsRepository->addNewRegisterUserLog($link, $userId);
    }

}