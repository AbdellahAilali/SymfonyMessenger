<?php


namespace App\Controller;


use \Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class Test extends AbstractController
{
    /**
     * @Route("/", name="test")
     * @return Response
     */
    public function indexAction()
    {

        return $this->render('home/index.html.twig', []);
    }
}