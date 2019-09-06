<?php


namespace App\Controller;

use App\Entity\Encounterlists;
use App\Entity\EncounterPublish;
use App\Entity\Tyrants;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PropertyAccess\PropertyAccess;


/**
 * @Route("/encounters", name="encounters_")
 */
class EncountersController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class)->findAll();

        if(!$encounters) {
            throw $this->createNotFoundException('No Encounters Found');
        }
        //return new Response('<h1>Encounter Lists</h1>');
        return $this->render('default/encounters.html.twig',
            array('encounters'=>$encounters)
        );
    }

    /**
     * @Route("/{id}", name="by_id", requirements={"id" = "\d+"})
     */
    public function encounter($id)
    {
        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class)->find($id);

        if(!$encounters) {
            throw $this->createNotFoundException('No Encounter found');
        }

        $encPublish = $this->getDoctrine()->getRepository(EncounterPublish::class)->find($id);
        $tyrantId = $encPublish->getTyrantId();

        $tyrant = $this->getDoctrine()->getRepository(Tyrants::class)->find($tyrantId);

        if(!$tyrant) {
            throw $this->createNotFoundException('No Tyrant Foound');
        }

        return $this->render('default/encounters.details.html.twig',
            array('encounters'=>$encounters, 'tyrant'=>$tyrant)
        );
    }

}