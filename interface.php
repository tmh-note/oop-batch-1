<?php

interface MailInterface
{
    public function send();
}

class Gmail implements MailInterface
{
    public function send()
    {
        echo "send Gmail";
    }
}

class Outlook implements MailInterface
{
    public function send()
    {
        echo "send Outlook";
    }
}

class Yahoo implements MailInterface
{
    public function send()
    {
        echo "send Outlook";
    }
}

class Mail
{
    private $mail;

    public function __construct(MailInterface $mail)
    {
        $this->mail = $mail;
    }

    public function send()
    {
        $this->mail->send();
    }
}

$mail = new Mail(new Gmail);
$mail = new Mail(new Outlook);
$mail = new Mail(new Yahoo);
