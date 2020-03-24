<?php

class UserLogsRepositoryImpl implements UserLogsRepositoryInterface {

    public function addNewRegisterUserLog($link, $userId) {
        mysqli_query($link, "INSERT INTO user_log SET `action` = 'register', user_id = $userId, log_time = NOW()");
    }

}