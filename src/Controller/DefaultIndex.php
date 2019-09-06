<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class DefaultIndex extends AbstractController
{

    /**
     * @Route("/", name="default_index")
     */
    public function index()
    {
       return $this->render('default/index.html..twig');
    }

}