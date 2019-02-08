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

        $user = new User();
        $event = new MailSendEvent($user);

        $this->dispatcher->addListener('command.send', function () {

            echo "Callable";
        });

        $this->dispatcher->dispatch(MailSendEvent::NAME, $event);


        echo ' ControllerExit';

        return $this->render('home/index.html.twig', []);

    }
}