<?php

class NotificationController {

    public function init($email) {
        $mailService = new MailServiceImpl();
        $notificationService = new NotificationService($mailService);

        $mailFactory = new MailFactory();
        $emailNotification = $mailFactory->createMail($email);

        $notificationService->sendSignupEmailNotification($emailNotification);
    }

}