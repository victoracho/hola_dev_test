<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {   
        $user = $this->getUser();
        return $this->render(
            'home/index.html.twig'
        );
    }
    /**
     * @Route("/page/{id}", methods={"GET","HEAD"})
     */
    public function  page(int $id): Response 
    {
        $user = $this->getUser();
        return $this->render(
            'home/page.html.twig',
            array('number' => $id, 'user' => $user )
        );
    }
}
