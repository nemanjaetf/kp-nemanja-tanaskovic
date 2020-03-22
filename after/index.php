<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Models
include './notification/model/InfoMessage.php';
include './user/login/model/UserLogin.php';
include './database/model/MySQL.php';

// Interfaces
include './notification/error/factory/LoginErrorFactoryInterface.php';
include './user/login/validation/email/UserEmailValidationInterface.php';
include './user/login/validation/password/UserPasswordValidationInterface.php';
include './database/connection/DBConnectionInterface.php';
include './database/factory/MySQLFactoryInterface.php';
include './database/validation/connection/DBConnectionValidationInterface.php';
include './database/DatabaseInterface.php';

include './notification/error/factory/LoginErrorFactory.php';
include './notification/JsonMessageFormatter.php';
include './notification/error/factory/HandleLoginError.php';
include './user/login/validation/email/EmailValidation.php';
include './user/login/validation/email/UserEmailValidation.php';
include './database/validation/connection/MySQLConnectionValidation.php';
include './database/validation/connection/DBConnectionValidation.php';
include './database/factory/MySQLFactory.php';
include './database/connection/DBConnection.php';

include './user/login/validation/password/PasswordValidation.php';
include './user/login/validation/password/UserPasswordValidation.php';
include './database/connection/mysql/MySQLDatabaseConnection.php';
include './database/connection/DBConnect.php';

include './user/login/validation/LoginValidation.php';
include './user/login/Login.php';
include './database/MySQLDatabase.php';
include './database/Database.php';

include './user/repository/UserRepositoryInterface.php';
include './user/repository/UserRepositoryImpl.php';

// Validate login...
$userLogin = new UserLogin();
// TODO : Skloni komentare na kraju.
// $userLogin->setEmail($_REQUEST['email']);
// $userLogin->setPassword($_REQUEST['password']);
// $userLogin->setPassword2($_REQUEST['password2']);

$userLogin->setEmail('');
$userLogin->setPassword('');
$userLogin->setPassword2('');
$login = new Login();
$login->init($userLogin);

// Connect to DB...
$db = new Database();
$link = $db->init();
