<?php

interface MailFactoryInterface {
    public function createMail($email) : EmailNotification;
}