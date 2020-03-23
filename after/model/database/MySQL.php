<?php

class MySQL {

    private $host;

    private $username;

    private $password;

    private $db;
    
    public function setHost(string $host) {
        $this->host = $host;
    }

    public function getHost() {
        return $this->host;
    }

    public function setUsername(string $username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setDb(string $db) {
        $this->db = $db;
    }

    public function getDb() {
        return $this->db;
    }

}