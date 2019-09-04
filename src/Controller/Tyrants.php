<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Route("/tyrants", name="tyrants_")
 */
class Tyrants extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        //return new Response('<h1>Encounter Lists</h1>');
        return $this->render('default/tyrants.twig');
    }

    /**
     * @Route("/{id}", name="by_id", requirements={"id" = "\d+"})
     */
    public function monthly($id)
    {
        $response = array("id" => $id);
        return $this->render('default/tyrants.twig', $response);
    }

}