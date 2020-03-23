<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Models
include './notification/model/InfoMessage.php';
include './user/login/model/UserLogin.php';
include './database/model/MySQL.php';
include './notification/model/EmailNotification.php';

// Interfaces
include './notification/error/factory/LoginErrorFactoryInterface.php';
include './user/login/validation/email/UserEmailValidationInterface.php';
include './user/login/validation/password/UserPasswordValidationInterface.php';
include './database/connection/DBConnectionInterface.php';
include './database/factory/MySQLFactoryInterface.php';
include './database/validation/connection/DBConnectionValidationInterface.php';
include './database/DatabaseInterface.php';
include './user/repository/validation/UserRepositoryValidationInterface.php';
include './notification/service/mail/factory/MailFactoryInterface.php';
include './notification/service/EmailNotificationServiceInterface.php';
include './user/logs/UserLogsRepositoryInterface.php';

include './notification/error/factory/LoginErrorFactory.php';
include './notification/JsonMessageFormatter.php';
include './notification/error/factory/HandleLoginError.php';
include './user/login/validation/email/EmailValidation.php';
include './user/login/validation/email/UserEmailValidation.php';
include './database/validation/connection/MySQLConnectionValidation.php';
include './database/validation/connection/DBConnectionValidation.php';
include './database/factory/MySQLFactory.php';
include './database/connection/DBConnection.php';
include './notification/service/mail/factory/MailFactory.php';

include './user/login/validation/password/PasswordValidation.php';
include './user/login/validation/password/UserPasswordValidation.php';
include './database/connection/mysql/MySQLDatabaseConnection.php';
include './database/connection/DBConnect.php';

include './user/login/validation/LoginValidation.php';
include './user/login/LoginController.php';
include './database/MySQLDatabase.php';
include './database/DatabaseController.php';

include './user/repository/validation/MysqliNumRowsValidation.php';
include './user/repository/validation/UserRepositoryValidation.php';

include './user/repository/UserRepositoryInterface.php';
include './user/repository/UserRepositoryImpl.php';
include './user/repository/UserRepository.php';
include './user/repository/UserController.php';

include './notification/service/NotificationService.php';
include './notification/service/mail/MailServiceImpl.php';
include './notification/service/NotificationController.php';

include './user/logs/UserLogsRepositoryImpl.php';
include './user/logs/UserLogsRepository.php';
include './user/logs/UserLogsController.php';

// Validate login...
$userLogin = new UserLogin();
// TODO : Skloni komentare na kraju.
// $userLogin->setEmail($_REQUEST['email']);
// $userLogin->setPassword($_REQUEST['password']);
// $userLogin->setPassword2($_REQUEST['password2']);

$userLogin->setEmail('');
$userLogin->setPassword('');
$userLogin->setPassword2('');
$login = new LoginController();
$login->init($userLogin);

// Connect to DB...
$db = new DatabaseController();
$link = $db->init();

// Do some db actions with the user.
$user = new UserController();
$result = $user->find($link, $userLogin->getEmail());
$user->addUser($link, $userLogin->getEmail(), $userLogin->getPassword());
$userId = $user->getUserId($link);

// Send email notification
$notification = new NotificationController();
$notification->init($userLogin->getEmail());

$userLogsController = new UserLogsController();
$userLogsController->init($link, $userId);

$_SESSION['userId'] = $userId;
  
echo json_encode([
'success' => true,
'userId'  => $userId
]);