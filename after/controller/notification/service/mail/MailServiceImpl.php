<?php

class MailServiceImpl implements EmailNotificationServiceInterface {

    public function sendSignupEmailNotification($emailNotification) {
        mail(
            $emailNotification->getEmail(),
            $emailNotification->getSubject(),
            $emailNotification->getBody(),
            $emailNotification->getEmail()
        );
    }

}