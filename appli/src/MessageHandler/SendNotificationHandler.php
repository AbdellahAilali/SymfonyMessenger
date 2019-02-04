<?php

namespace App\MessageHandler;

use App\Message\SendNotification;
use Swift_Mailer;


class SendNotificationHandler
{
    /**
     * @var Swift_Mailer
     */
    private $mailer;

    /**
     * SendNotificationHandler constructor.
     * @param Swift_Mailer $mailer
     */
    public function __construct(Swift_Mailer $mailer)
    {
        dd($mailer);
        //$this->mailer = $mailer;
    }

    /**
     * @param SendNotification $notification
     */
    public function __invoke(SendNotification $notification)
    {
        foreach ($notification->getRecipients() as $recipient) {

            $message = (new \Swift_Message('notification TDN!'))
                ->setFrom('ailali.abdela@gmail.com')
                ->setTo($recipient)
                ->setBody(
                   sprintf("<h1>Notification from TDN</h1><p>%s</p>",
                   $notification->getMessage()),
                    'text/html'
                );

            $this->mailer->send($message);

            dump(sprintf('Envoie de la notification %s à %s',
                $notification->getMessage(), $recipient));
        }

    }

}