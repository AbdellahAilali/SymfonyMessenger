<?php

namespace App\MessageHandler;

use App\Entity\User;
use App\Message\SendMessage;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

class SendMessageHandler
{
    /**
     * @var EntityManager
     */
    private $entityManager;


    /**
     * SendMessageHandler constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param SendMessage $message
     * @return array|object[]
     */
    public function __invoke(SendMessage $message)
    {
        //sleep(5);

        $users = $this->entityManager->getRepository(User::class)->findAll();

        $tabUser = array();
        foreach ($users as $user) {
            $tabUser[] = [
                "id" => $user->getId(),
                "username" => $user->getUsername(),
                "email" => $user->getEmail()
            ];
        }
        echo'ok';
        return $tabUser;
    }
}