<?php

namespace App\Components;

class Mailer
    extends \PHPMailer
{
    protected function validateEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }
}