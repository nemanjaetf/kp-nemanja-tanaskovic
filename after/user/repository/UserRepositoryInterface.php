<?php

interface UserRepositoryInterface {
    public function find(string $email);
}
