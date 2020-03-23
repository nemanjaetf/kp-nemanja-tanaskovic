<?php

class UserRepositoryImpl implements UserRepositoryInterface {

    public function find($link, $email) {
        return mysqli_query($link, "SELECT * FROM user WHERE email = '$email'");
    }

    public function addUser($link, $email, $password) {
        mysqli_query($link, "INSERT INTO user SET email = '$email', password = '$password'");
    }

    public function getUserId($link) {
        return mysqli_insert_id($link);
    }

}