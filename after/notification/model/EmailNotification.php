<?php

class EmailNotification {

    public $email;

    public $subject;

    public $body;

    public $sendTo;
    
    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setSubject(string $subject) {
        $this->subject = $subject;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setBody(string $body) {
        $this->body = $body;
    }

    public function getBody() {
        return $this->body;
    }

    public function setSendTo(string $sendTo) {
        $this->sendTo = $sendTo;
    }

    public function getSendTo() {
        return $this->sendTo;
    }

}