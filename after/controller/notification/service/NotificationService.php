<?php

class NotificationService {

    private $notificationInterface;
 
    function __construct(NotificationInterface $notificationInterface) {
        $this->notificationInterface = $notificationInterface;
    }
 
    function sendNotification() {
        return $this->notificationInterface->sendNotification();
    }

}