<?php

namespace App\Message;


class SendMessage
{
    /**
     * @var string
     */
    private $message;

    /**
     * SendMessage constructor.
     * @param string $message
     */
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }


}