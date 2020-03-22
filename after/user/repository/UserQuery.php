<?php

class UserQuery implements UserRepositoryInterface, UserQueryInterface {

    public function find($email) {
        return "SELECT * FROM user WHERE email = '$email'";
    }

    public function execute($link, $query) {
        mysqli_query($link, $query);
    }

}