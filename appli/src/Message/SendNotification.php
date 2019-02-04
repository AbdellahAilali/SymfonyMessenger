<?php

namespace App\Message;


/**
 * Class SendNotification
 * @package App\Message
 */
class SendNotification
{
    /**
     * @var $message
     */
    private $message;

    /**
     * @var array $recipients
     */
    private $recipients;

    /**
     * SendNotification constructor.
     * @param $message
     * @param array $recipients
     */
    public function __construct(string $message,array $recipients = [])
    {
        $this->message = $message;
        $this->recipients = $recipients;
    }


    public function getMessage()
    {
        return $this->message;
    }

    public function getRecipients()
    {
        return $this->recipients;
    }

}