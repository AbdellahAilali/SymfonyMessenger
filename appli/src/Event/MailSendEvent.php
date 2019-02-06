<?php


namespace App\Event;

use App\Entity\User;
use Symfony\Component\EventDispatcher\Event;


/**
 * The order.placed event is dispatched each time an order is created
 * in the system.
 */

class MailSendEvent extends Event
{
    public const NAME = "mail.send";

    /**
     * @var User $userCreated
     */
    protected $userCreated;


    public function __construct(User $userCreated)
    {
        $this->userCreated = $userCreated;
        echo ' Event /';
    }

    public function getUserCreated()
    {
        return $this->userCreated;
    }

}