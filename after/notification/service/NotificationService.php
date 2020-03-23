<?php

class NotificationService {

    private $emailNotificationServiceInterface;
 
    function __construct(EmailNotificationServiceInterface $emailNotificationServiceInterface) {
        $this->emailNotificationServiceInterface = $emailNotificationServiceInterface;
    }
 
    function sendSignupEmailNotification($emailNotification) {
        return $this->emailNotificationServiceInterface->sendSignupEmailNotification($emailNotification);
    }

}