<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints\Mail;

trait MailerReqTrait
{

    protected $mailer;

    public function setMailer( $mailer)
    {
        $this->mailer = $mailer;
    }

    protected function sendMail(string $recipient, string $subject, string $message, array $cc = [], array $bcc = [], array $attch = [])
    {
        if (isset($this->mailer) && method_exists($this->mailer, 'sendMail')) {
            return $this->mailer->sendMail(...get_defined_vars());
        }
        return false;
    }

}
