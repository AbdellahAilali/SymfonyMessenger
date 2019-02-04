<?php

namespace App\Controller;

use App\Message\SendMessage;
use App\MessageHandler\SendMessageHandler;
use Swift_Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\HandledStamp;
use Symfony\Component\Routing\Annotation\Route;

class SendMessageController extends AbstractController
{
    /**
     * @Route("/send", name="send_message")
     * @param Request $request
     * @param MessageBusInterface $bus
     * @return Response
     */
    public function sendAction(Request $request, MessageBusInterface $bus)
    {
        $envelope = $bus->dispatch(new SendMessage('myMessage'));

        //$handledStamp = $envelope->last(HandledStamp::class);

        //$dataEnvelope = $handledStamp->getResult();

        //return new JsonResponse([$dataEnvelope]);
        return $this->render('home/index.html.twig',[]);
    }
}