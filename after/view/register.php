<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// --------> Import models <--------
include '../model/database/MySQL.php';
include '../model/registration/UserRegistration.php';
include '../model/EmailNotification.php';
include '../model/InfoMessage.php';

// --------> Import error notification <--------
// controller/notification
include '../controller/notification/JsonMessageFormatter.php';

// controller/notification/error
include '../controller/notification/error/factory/RegistrationErrorFactoryInterface.php';
include '../controller/notification/error/factory/RegistrationErrorFactory.php';
include '../controller/notification/error/HandleRegistrationError.php';
// --------> End of error notification <--------

// --------> Import email service <--------
// controller/notification/service
include '../controller/notification/service/NotificationInterface.php';

// controller/notification/service/mail/factory
include '../controller/notification/service/mail/factory/MailFactoryInterface.php';
include '../controller/notification/service/mail/factory/MailFactory.php';

// controller/notification/service/mail
include '../controller/notification/service/mail/MailServiceImpl.php';

// controller/notification/service
include '../controller/notification/service/NotificationService.php';
include '../controller/notification/service/NotificationController.php';
// --------> End of email service <--------

// --------> Import error notification <--------
// controller/notification/success
include '../controller/notification/success/factory/RegistrationSuccessFactoryInterface.php';
include '../controller/notification/success/factory/RegistrationSuccessFactory.php';
include '../controller/notification/success/HandleRegistrationSuccess.php';
// --------> End of error notification <--------

// --------> Import database <--------
// controller/database
include '../controller/database/DatabaseInterface.php';

// controller/database/connection
include '../controller/database/connection/DBConnectionInterface.php';
include '../controller/database/connection/mysql/MySQLDatabaseConnection.php';
include '../controller/database/connection/DBConnection.php';
include '../controller/database/connection/DBConnectController.php';

// controller/database/factory
include '../controller/database/factory/MySQLFactoryInterface.php';
include '../controller/database/factory/MySQLFactory.php';

// controller/database/validation/connection
include '../controller/database/validation/connection/DBConnectionValidationInterface.php';
include '../controller/database/validation/connection/mysql/MySQLConnectionValidation.php';
include '../controller/database/validation/connection/DBConnectionValidation.php';

// controller/database
include '../controller/database/MySQLDatabase.php';
include '../controller/database/DatabaseController.php';
// --------> End of database <--------

// --------> Import registration <--------
// controller/user/logs
include '../controller/user/logs/UserLogsRepositoryInterface.php';
include '../controller/user/logs/UserLogsRepositoryImpl.php';
include '../controller/user/logs/UserLogsRepository.php';
include '../controller/user/logs/UserLogsController.php';

// controller/user/repository
include '../controller/user/repository/UserRepositoryInterface.php';
include '../controller/user/repository/UserRepositoryImpl.php';
include '../controller/user/repository/UserRepository.php';

// controller/user/repository/validation
include '../controller/validation/user/UserRepositoryValidationInterface.php';
include '../controller/validation/user/UserExistValidation.php';
include '../controller/validation/user/UserRepositoryValidation.php';

include '../controller/user/repository/UserController.php';
// --------> End of registration <--------

// --------> Import validation <--------
// controller/validation/email
include '../controller/validation/email/UserEmailValidationInterface.php';
include '../controller/validation/email/EmailValidation.php';
include '../controller/validation/email/UserEmailValidation.php';

// controller/validation/password
include '../controller/validation/password/UserPasswordValidationInterface.php';
include '../controller/validation/password/PasswordValidation.php';
include '../controller/validation/password/UserPasswordValidation.php';

// controller/validation
include '../controller/validation/RegistrationValidationController.php';
// --------> End of of registration validation <--------

include '../controller/user/RegistrationController.php';

// Validate registration...
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userRegistration = new UserRegistration();
    $userRegistration->setEmail($_REQUEST['email']);
    $userRegistration->setPassword($_REQUEST['password']);
    $userRegistration->setPassword2($_REQUEST['password2']);

    $registration = new RegistrationController();
    $registration->validate($userRegistration);

    // Connect to DB...
    $db = new DatabaseController();
    $link = $db->init();

    // Do some db actions with the user.
    $user = new UserController();
    $result = $user->find($link, $userRegistration->getEmail());

    $user->addUser($link, $userRegistration->getEmail(), $userRegistration->getPassword());
    $userId = $user->getUserId($link);

    // Send email notification
    $notification = new NotificationController();
    $notification->sendEmailNotification($userRegistration->getEmail());

    $userLogsController = new UserLogsController();
    $userLogsController->addNewRegisterUserLog($link, $userId);

    $_SESSION['userId'] = $userId;

    $registrationSuccess = new HandleRegistrationSuccess();
    $registrationSuccess->showMessage($userId);
}

?>

<!DOCTYPE html>
<html>
<body>

<h1>Register</h1>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Email: <input type="email" name="email">
  <br>
  Password: <input type="password" name="password">
  <br>
  Password again: <input type="password" name="password2">
  <br>
  <input type="submit">
</form>

</body>
</html>
