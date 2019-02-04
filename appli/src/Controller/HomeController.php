<?php

namespace App\Controller;

use App\Message\SendMessage;
use App\Message\SendNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     * @param Request $request
     * @param MessageBusInterface $bus
     * @return Response
     */
    public function index(Request $request, MessageBusInterface $bus)
    {
        /*$message = $request->get('message', 'Hello la famille');

        $bus->dispatch(new SendNotification($message));*/


        echo  '<input type="text" name="nom"/>';
        echo  '<input type="submit" value="OK">';


        dump($request->()) ;

        return $this->render('home/index.html.twig', []);


    }
}