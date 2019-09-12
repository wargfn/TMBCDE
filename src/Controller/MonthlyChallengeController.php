<?php

namespace App\Controller;

use App\Entity\Monthlychallenges;
use App\Entity\Encounterlists;
use App\Entity\Tyrants;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/monthly")
 */
class MonthlyChallengeController extends AbstractController
{
    /**
     * @Route("/", name="monthly_index")
     */
    public function index()
    {
        $monthlyChallenges = $this->getDoctrine()->getRepository(Monthlychallenges::class)->findAll();

        if(!$monthlyChallenges) {
            throw $this->createNotFoundException('No Monthly Challenges Found');
        }

        //return new Response("<h1>BOOM!</h1><p>Does this finally work?</p>");
        return $this->render('default/monthly.html.twig',
            array('monthlyChallenges'=>$monthlyChallenges)
            );
    }

    /**
     * @Route("/{id}", name="monthly_by_id", requirements={"id" = "\d+"})
     */
    public function monthly($id)
    {
        $monthlyChallenges = $this->getDoctrine()->getRepository(Monthlychallenges::class)->find($id);

        if(!$monthlyChallenges) {
            throw $this->createNotFoundException('No Monthly Challenge');
        }

        $monthlyEnc = $monthlyChallenges->getEncounterlistid();

        if(!$monthlyEnc) {
            throw $this->createNotFoundException('No Encounter list found');
        }

        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class)->find($monthlyEnc);

        if(!$encounters) {
            throw $this->createNotFoundException('No Encounter list found');
        }

        $tyrantId = $encounters->getTyrantId();

        $tyrant = $this->getDoctrine()->getRepository(Tyrants::class)->find($tyrantId);

        if(!$tyrant) {
            throw $this->createNotFoundException('No Tyrant Found');
        }


        return $this->render('default/monthlychallenges.details.html.twig',
            array('monthlyChallenges'=>$monthlyChallenges, 'tyrant'=>$tyrant, 'encounters'=>$encounters)
            );
    }

}