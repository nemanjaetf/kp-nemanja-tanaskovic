<?php

class MailServiceImpl implements NotificationInterface {

    private $email;

    function __construct(string $email) {
        $this->email = $email;
    }

    public function sendNotification() {
        $mailFactory = new MailFactory();
        $emailNotification = $mailFactory->createMail($this->email);

        mail(
            $emailNotification->getEmail(),
            $emailNotification->getSubject(),
            $emailNotification->getBody(),
            $emailNotification->getEmail()
        );
    }

}