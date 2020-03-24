<?php

class NotificationController {

    public function sendEmailNotification($email) {
        $mailService = new MailServiceImpl($email);
        $notificationService = new NotificationService($mailService);

        $notificationService->sendNotification();
    }

}