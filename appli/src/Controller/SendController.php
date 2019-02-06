<?php


namespace App\Controller;


use App\Entity\User;
use App\Event\MailSendEvent;
use App\EventListener\SendMailListener;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class SendController extends AbstractController
{

    /**
     * @var EventDispatcherInterface
     */
    private $dispatcher;
    /**
     * @var SendMailListener
     */
    private $sendMailListener;


    public function __construct(
        EventDispatcherInterface $dispatcher,
        SendMailListener $sendMailListener
    )
    {
        $this->dispatcher = $dispatcher;
        $this->sendMailListener = $sendMailListener;
    }

    /**
     * @Route("/event",name="send_event")
     */
    public function sendAction()
    {
        echo 'ControllerEntry /';

        $user = new User("Mugiwarano", "01/01/1993");
        $event = new MailSendEvent($user);

        $this->dispatcher->dispatch(MailSendEvent::NAME, $event);

        echo ' ControllerExit';

        /*$user = new User();

        $event = new MailSendEvent($user);

        $this->dispatcher->dispatch(MailSendEvent::NAME, $event);*/

        return $this->render('home/index.html.twig', []);

    }
}