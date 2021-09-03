<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints\Mail;

trait MailerReqTrait
{

    protected $mailer;

    public function setMailer($mailer)
    {
        $this->mailer = $mailer;
    }
}
