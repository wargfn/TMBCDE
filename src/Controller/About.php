<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Route("/about", name="about_")
 */
class About extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        //return new Response('<h1>Encounter Lists</h1>');
        return $this->render('default/about.twig');
    }
}