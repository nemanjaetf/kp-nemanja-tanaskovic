<?php

class MySQLDatabaseConnection implements DBConnectionInterface {

    public function connect($host, $username, $password, $database) {
        $link = mysqli_connect($host, $username, $password, $database);
        return $link;
    }

}