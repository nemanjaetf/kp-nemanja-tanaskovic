<?php

class MySQLDatabaseConnection implements DBConnectionInterface {

    public function connect($host, $username, $password, $database) {
        return mysqli_connect($host, $username, $password, $database);
    }

}