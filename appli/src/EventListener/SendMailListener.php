<?php


namespace App\EventListener;


use Symfony\Component\EventDispatcher\Event;

class SendMailListener
{

    public function sendMailAction(Event $event)
    {
        echo ' Listener /';
        dump($event);

    }
}