<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    /**
     *
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('home/base.html.twig', [
            'path' => 'Texto del Controlador Home'
        ]);
    }

    /**
     *
     * @Route("/home", name="home")
     */
    public function home()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController'
        ]);
    }
}
