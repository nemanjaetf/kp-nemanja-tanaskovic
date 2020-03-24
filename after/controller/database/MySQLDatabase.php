<?php

class MySQLDatabase implements DatabaseInterface {

    // Initialize database.
    public function init() {
        $db = new DBConnectController();
        $link = $db->connectToMySQL();
        return $link;
    }

}