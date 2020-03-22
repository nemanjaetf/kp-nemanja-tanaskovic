<?php

class DatabaseValidation {

    public function validate() {
        $mysqlDbConn = new MySQLConnectionValidation();
        $mysqlDbConnValidation = new DBConnectionValidation($mysqlDbConn);
        $mysqlDbConnValidation->validate_connection();
    }

}