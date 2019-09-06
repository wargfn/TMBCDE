<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Gearlocs;


/**
 * @Route("/gearlocs", name="gearlocs_")
 */
class GearlocsController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $gearlocs = $this->getDoctrine()->getRepository(Gearlocs::class)->findAll();

        if(!$gearlocs) {
            throw $this->createNotFoundException('No Gearlocs Found');
        }
        //return new Response('<h1>Encounter Lists</h1>');
        return $this->render('default/gearlocs.html.twig',
            array('gearlocs'=>$gearlocs)
        );
    }

    /**
     * @Route("/{id}", name="by_id", requirements={"id" = "\d+"})
     */
    public function monthly($id)
    {
        $gearlocs = $this->getDoctrine()->getRepository(Gearlocs::class)->find($id);

        if(!$gearlocs) {
            throw $this->createNotFoundException('No Gearlocs Found');
        }

        return $this->render('default/gearlocs.html.twig', array('gearlocs'=> $gearlocs));
    }

}