<?php

class DatabaseController {

    // Initialize DB.
    // In this case DB is MySQL, but it can be changed.
    public function init() {
        $db = new MySQLDatabase();
        return $db->init();
    }

}