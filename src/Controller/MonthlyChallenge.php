<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
        return $this->render('default/monthly.html.twig');
    }

    /**
     * @Route("/{id}", name="monthly_by_id", requirements={"id" = "\d+"})
     */
    public function monthly($id)
    {
        $response = array("id" => $id);
        return $this->render('default/monthly.html.twig', $response);
    }

}