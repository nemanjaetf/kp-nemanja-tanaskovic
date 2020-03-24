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
include '../controller/notification/service/EmailNotificationServiceInterface.php';

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
// controller/registration/logs
include '../controller/registration/logs/UserLogsRepositoryInterface.php';
include '../controller/registration/logs/UserLogsRepositoryImpl.php';
include '../controller/registration/logs/UserLogsRepository.php';
include '../controller/registration/logs/UserLogsController.php';

// controller/registration/repository
include '../controller/registration/repository/UserRepositoryInterface.php';
include '../controller/registration/repository/UserRepositoryImpl.php';
include '../controller/registration/repository/UserRepository.php';

// controller/registration/repository/validation
include '../controller/registration/repository/validation/UserRepositoryValidationInterface.php';
include '../controller/registration/repository/validation/UserExistValidation.php';
include '../controller/registration/repository/validation/UserRepositoryValidation.php';

include '../controller/registration/repository/UserController.php';
// --------> End of registration <--------

// --------> Import registration validation <--------
// controller/registration/validation/email
include '../controller/registration/validation/email/UserEmailValidationInterface.php';
include '../controller/registration/validation/email/EmailValidation.php';
include '../controller/registration/validation/email/UserEmailValidation.php';

// controller/registration/validation/password
include '../controller/registration/validation/password/UserPasswordValidationInterface.php';
include '../controller/registration/validation/password/PasswordValidation.php';
include '../controller/registration/validation/password/UserPasswordValidation.php';

// controller/registration/validation
include '../controller/registration/validation/RegistrationValidation.php';
// --------> End of of registration validation <--------

include '../controller/registration/RegistrationController.php';

// Validate registration...
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userRegistration = new UserRegistration();
    $userRegistration->setEmail($_REQUEST['email']);
    $userRegistration->setPassword($_REQUEST['password']);
    $userRegistration->setPassword2($_REQUEST['password2']);
    $registration = new RegistrationController();
    $registration->init($userRegistration);

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
    $notification->sendSignupEmailNotification($userRegistration->getEmail());

    $userLogsController = new UserLogsController();
    $userLogsController->init($link, $userId);

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
