<?php

class MySQLFactory implements MySQLFactoryInterace {
    public function createMySQLObject() : MySQL {
        $mysql = new MySQL();

        // TODO : Remove comments and delete lines after.
        
        // $mysql->setHost(ini_get("mysql.default.host"));
        // $mysql->setUsername(ini_get("mysql.default.user"));
        // $mysql->setPassword(ini_get("mysql.default.password"));
        // $mysql->setDb(ini_get("mysql.default.db"));
        
        $db_password    = 'twJQc#.b{9K_';
        $host_name      = 'localhost';
        $db_name        = 'nemanjat_kp_test';
        $db_user        = 'nemanjat_an';

        $mysql->setHost($host_name);
        $mysql->setUsername($db_user);
        $mysql->setPassword($db_password);
        $mysql->setDb($db_name);

        return $mysql;
    }
}