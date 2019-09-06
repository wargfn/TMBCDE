<?php


namespace App\Controller;

use App\Entity\EncounterPublish;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Route("/encounters", name="encounters_")
 */
class Encounters extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        //return new Response('<h1>Encounter Lists</h1>');
        return $this->render('default/encounters.html.twig');
    }

    /**
     * @Route("/{id}", name="by_id", requirements={"id" = "\d+"})
     */
    public function encounter(EncounterPublish $id)
    {

        $encounter = array($this->json($id));
        return $this->render('default/encounters.html.twig', $encounter);
    }

}