<?php


namespace App\Controller;


use App\Entity\Encounterlists;
use App\Entity\Tyrants;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Route("/tyrants", name="tyrants_")
 */
class TyrantsController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $tyrants = $this->getDoctrine()->getRepository(Tyrants::class)->findAll();
        //$gearlocs = $this->getDoctrine()->getRepository(Gearlocs::class)->findAll();

        if(!$tyrants) {
            throw $this->createNotFoundException('No Tyrants Found');
        }

        //return new Response('<h1>Encounter Lists</h1>');
        return $this->render('default/tyrants.html.twig',
            array('tyrants'=>$tyrants)
        );
    }

    /**
     * @Route("/{id}", name="by_id", requirements={"id" = "\d+"})
     */
    public function monthly($id)
    {
        $tyrants = $this->getDoctrine()->getRepository(Tyrants::class)->find($id);

        if(!$tyrants) {
            throw $this->createNotFoundException('No Tyrants Found');
        }

        /* $tid = $tyrants.id; */

        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class)->findBy(['tyrantid' => $tyrants]);
        if(!$encounters) {
            //throw $this->createNotFoundException('No Encounters Found');
            $encounters = [];
        }
        return $this->render('default/tyrants.html.twig', array('encounters'=>$encounters, 'tyrants'=>$tyrants));
    }

}