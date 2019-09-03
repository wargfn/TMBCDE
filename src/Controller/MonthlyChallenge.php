<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/monthly")
 */
class MonthlyChallenge extends AbstractController
{
    /**
     * @Route("/", name="monthly_index")
     */
    public function index()
    {
        //return new Response("<h1>BOOM!</h1><p>Does this finally work?</p>");
        return $this->render('default/monthly.twig');
    }
}