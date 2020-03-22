<?php

interface UserRepositoryInterface {
    public function find($link, string $email);

    public function addUser($link, $email, $password);
}
