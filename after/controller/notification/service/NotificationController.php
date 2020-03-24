<?php

class NotificationController {

    public function sendSignupEmailNotification($email) {
        $mailService = new MailServiceImpl();
        $notificationService = new NotificationService($mailService);

        $mailFactory = new MailFactory();
        $emailNotification = $mailFactory->createMail($email);

        $notificationService->sendSignupEmailNotification($emailNotification);
    }

}