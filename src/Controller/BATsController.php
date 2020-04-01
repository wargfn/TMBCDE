<?php


namespace App\Controller;


use App\Entity\Encounterlists;
use App\Entity\BATs;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Route("/bats", name="bats_")
 */
class BATsController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $bats = $this->getDoctrine()->getRepository(BATs::class)->findAll();
        //$gearlocs = $this->getDoctrine()->getRepository(Gearlocs::class)->findAll();

        if(!$bats) {
            throw $this->createNotFoundException('No Build-A-Tyrants Found');
        }

        //return new Response('<h1>Encounter Lists</h1>');
        return $this->render('default/bats.html.twig',
            array('bats'=>$bats)
        );
    }

    /**
     * @Route("/{id}", name="by_id", requirements={"id" = "\d+"})
     */
    public function monthly($id)
    {
        $bats = $this->getDoctrine()->getRepository(BATs::class)->find($id);

        if(!$bats) {
            throw $this->createNotFoundException('No Build-A-Tyrants Found');
        }

        $tid = 23;

        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class)->findBy(['tyrantid' => $tid]);
        if(!$encounters) {
            throw $this->createNotFoundException('No Encounters Found');
            $encounters = [];
        }
        return $this->render('default/bats.html.twig', array('encounters'=>$encounters, 'bats'=>$bats));
        /*return $this->render('default/bats.html.twig', array('bats'=>$bats));*/
    }

}