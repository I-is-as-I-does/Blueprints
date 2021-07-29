<?php

/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints;


interface MailerInterface {

    public function sendMail($recipient, $subject, $message, $cc = [], $bcc = [], $attch = []);

}