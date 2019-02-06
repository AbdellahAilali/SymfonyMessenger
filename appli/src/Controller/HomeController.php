<?php

namespace App\Controller;

use App\Entity\User;
use App\Message\SendNotification;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

/*class SendMail implements SenderInterface
{
    public function send()
    {

    }
}

class SendSMS implements SenderInterface
{
    public function send()
    {

    }
}

interface SenderInterface
{
    public function send();
}

new HomeController(new SendSMS());
new HomeController(new SendMail());

class HomeController extends AbstractController
{


    private $sender;

    public function __construct(SenderInterface $sender)
    {
        $this->sender = $sender;
    }


    public function index()
    {
        $this->sender->send();
    }
}
*/

class HomeController extends AbstractController
{

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

   /* public function index(Request $request, MessageBusInterface $bus)
    {
        $message = $request->get('message', 'Hello la famille');

        $bus->dispatch(new SendNotification($message));

        return $this->render('home/index.html.twig', []);
    }*/

    /**
     * @Route("/", name="home")
     * @param $id
     * @return JsonResponse
     */
    public function testExceptions()
    {
        try {
            $x = 9/0;

        } catch (NotFoundHttpException $exception) {
            return new JsonResponse(['error_message' =>
                $exception->getMessage()]);
        }
        return new JsonResponse($x);
    }
}