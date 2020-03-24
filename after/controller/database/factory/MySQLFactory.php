<?php

class MySQLFactory implements MySQLFactoryInterace {
    public function createMySQLObject() : MySQL {
        $mysql = new MySQL();        
        $mysql->setHost(ini_get("mysql.default.host"));
        $mysql->setUsername(ini_get("mysql.default.user"));
        $mysql->setPassword(ini_get("mysql.default.password"));
        $mysql->setDb(ini_get("mysql.default.db"));
        return $mysql;
    }
}