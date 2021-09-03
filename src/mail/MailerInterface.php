<?php

/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints\Mail;

interface MailerInterface
{

    public function sendMail(string $recipient, string $subject, string $message, array $cc = [], array $bcc = [], array $attch = []);

}
