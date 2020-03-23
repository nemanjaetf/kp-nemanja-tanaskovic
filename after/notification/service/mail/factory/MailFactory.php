<?php

class MailFactory implements MailFactoryInterface {
    public function createMail($email) : EmailNotification {
        $emailNotification = new EmailNotification();
        $emailNotification->setEmail($email);
        $emailNotification->setSubject("Dobro došli");
        $emailNotification->setBody("Dobro dosli na nas sajt. Potrebno je samo da potvrdite email adresu ...");
        $emailNotification->setSendTo("adm@kupujemprodajem.com");
        return $emailNotification;
    }
}