<?php

class MySQLFactory implements MySQLFactoryInterace {
    public function createMySQLObject() : MySQL {
        $mysql = new MySQL();
        $mysql->setHost(ini_get("mysql.default.host"));
        $mysql->setUsername(ini_get("mysql.default.user"));
        $mysql->setPassword(ini_get("mysql.default.password"));
        $mysql->setDb(ini_get("mysql.default.db"));

        $mysql->setHost($host_name);
        $mysql->setUsername($db_user);
        $mysql->setPassword($db_password);
        $mysql->setDb($db_name);
        return $mysql;
    }
}