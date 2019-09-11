<?php


namespace App\Controller;

use App\Form\EncounterType;
use App\Form\MonthlyType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Cards;
use App\Entity\Tyrants;
use App\Entity\Encounterlists;
use App\Entity\Monthlychallenges;
use App\Entity\Gearlocs;
use Doctrine\ORM\EntityManager;

/**
 * Card controller
 * @Route("/api", name="api_")
 */
class APIPostController extends AbstractFOSRestController
{
    /**
     * @Route("/encounter/add", name="encounter_post", methods={"POST"})
     */
    public function encountersPost(Request $request)
    {
        $encounter = new Encounterlists();
        $form = $this->createForm(EncounterType::class, $encounter);
        $data = json_decode($request->getContent(), true);
        $form->submit($data);
        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($encounter);
            $em->flush();
            return $this->handleView($this->view($encounter, Response::HTTP_CREATED));

        }
        return $this->handleView($this->view($form->getErrors()));
    }

    /**
     * @Route("/monthly/add", name="monthly_post", methods={"POST"})
     */
    public function monthlyPost(Request $request)
    {
        $challenge = new Monthlychallenges();
        $form = $this->createForm(MonthlyType::class, $challenge);
        $data = json_decode($request->getContent(), true);
        $form->submit($data);
        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($challenge);
            $em->flush();
            return $this->handleView($this->view($challenge, Response::HTTP_CREATED));

        }
        return $this->handleView($this->view($form->getErrors()));
    }
}