<?php

interface DBConnectionInterface {

    public function connect($host, $username, $password, $database);

}