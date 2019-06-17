<?php

namespace App\Controller;

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


/**
 * Card controller
 * @Route("/api", name="api_")
 */
class API extends AbstractFOSRestController
{
    /**
     * Lists all Cards
     * @Rest\Get("/cards")
     *
     * @return Response
     */
    public function getCardsAction()
    {
        $repository = $this->getDoctrine()->getRepository(Cards::class);
        $cards = $repository->findAll();
        return $this->handleView($this->view($cards));
        //return $this->json(['Coming'=>'Soon']);
    }

    /**
     * Lists all Tyrants
     * @Rest\Get("/tyrants")
     *
     * @return Response
     */
    public function getTyrantsAction()
    {
        $repository = $this->getDoctrine()->getRepository(Tyrants::class);
        $tyrants = $repository->findAll();
        return $this->handleView($this->view($tyrants));
        //return $this->json(['Coming'=>'Soon']);
    }
     
    /**
     * Lists all Gearlocs
     * @Rest\Get("/gearlocs")
     *
     * @return Response
     */
    public function getGearlocsAction()
    {
        $repository = $this->getDoctrine()->getRepository(Gearlocs::class);
        $gearlocs = $repository->findAll();
        return $this->handleView($this->view($gearlocs));
    }

    /**
     * Lists all Encounterslist
     * @Rest\Get("/encounters")
     *
     * @return Response
     */
    public function getEncounterListsAction()
    {
        $repository = $this->getDoctrine()->getRepository(Encounterlists::class);
        $encounters = $repository->findAll();
        return $this->handleView($this->view($encounters));
        //return $this->json(['Coming'=>'Soon']);
    }

    /**
     * Lists all Monthlychallenges
     * @Rest\Get("/monthly")
     *
     * @return Response
     */
    public function getMonthlyAction()
    {
        $repository = $this->getDoctrine()->getRepository(Monthlychallenges::class);
        $challenges = $repository->findAll();
        return $this->handleView($this->view($challenges));
        //return $this->json(['Coming'=>'Soon']);
    }

    /**
     * Generates a Challenge
     * @Rest\Get("/generateBase")
     *
     * @return Response
     */
    public function getGenerateBaseEncounterAction()
    {
        $cards = $this->getDoctrine()->getRepository(Cards::class);
        $tyrants = $this->getDoctrine()->getRepository(Tyrants::class);
        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class);
        $rndNum = rand(1, 7);
        $soloCards = $cards->findBy(['cardType' => 'Solo', 'cardSet' => 'Base Set']);
        $rndTyrant = $tyrants->findOneBy(['id' => $rndNum]);
        $days = $rndTyrant->getDays();
        $tyrant = $rndTyrant->getName();
        $tyrantCards = $cards->findBy(['cardType' => $tyrant]);
        $encCards = $soloCards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);
        $buildEncounter = $encounters->findOneBy(['id' => '1']);
        $buildEncounter->setTyrantId($rndTyrant);
        if ($days >= 1) {
            $buildEncounter->setDay1Id($cards->findOneBy(['id' => '31']));
        }

        if ($days >= 2) {
            $buildEncounter->setDay2Id($cards->findOneBy(['id' => '32']));
        }

        if ($days >= 3) {
            $buildEncounter->setDay3Id($cards->findOneBy(['id' => '33']));
        }

        if ($days >= 4) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay4Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 5) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay5Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 6) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay6Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 7) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay7Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 8) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay8Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 9) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay9Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 10) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay10Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 11) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay11Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 12) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay12Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 13) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay13Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }
        //$results = $soloCards;
        //$results = $rndTyrant;

        $encCards = $soloCards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);

        return $this->handleView($this->view($buildEncounter));
    }

    /**
     * Generates a Challenge
     * @Rest\Get("/generateGeneralBase")
     *
     * @return Response
     */
    public function getGenerateBaseGeneralEncounterAction()
    {
        $cards = $this->getDoctrine()->getRepository(Cards::class);
        $tyrants = $this->getDoctrine()->getRepository(Tyrants::class);
        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class);
        $rndNum = rand(1, 7);
        $generalCards = $cards->findBy(['cardType' => 'General', 'cardSet' => 'Base Set']);
        $rndTyrant = $tyrants->findOneBy(['id' => $rndNum]);
        $days = $rndTyrant->getDays();
        $tyrant = $rndTyrant->getName();
        $tyrantCards = $cards->findBy(['cardType' => $tyrant]);
        $encCards = $generalCards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);
        $buildEncounter = $encounters->findOneBy(['id' => '1']);
        $buildEncounter->setTyrantId($rndTyrant);
        if ($days >= 1) {
            $buildEncounter->setDay1Id($cards->findOneBy(['id' => '31']));
        }

        if ($days >= 2) {
            $buildEncounter->setDay2Id($cards->findOneBy(['id' => '32']));
        }

        if ($days >= 3) {
            $buildEncounter->setDay3Id($cards->findOneBy(['id' => '33']));
        }

        if ($days >= 4) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay4Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 5) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay5Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 6) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay6Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 7) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay7Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 8) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay8Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 9) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay9Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 10) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay10Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 11) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay11Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 12) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay12Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 13) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay13Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }
        //$results = $soloCards;
        //$results = $rndTyrant;

        $encCards = $generalCards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);

        return $this->handleView($this->view($buildEncounter));
    }

    /**
     * Generates a Challenge
     * @Rest\Get("/generateUndertow")
     *
     * @return Response
     */
    public function getGenerateUndertowEncounterAction()
    {
        $cards = $this->getDoctrine()->getRepository(Cards::class);
        $tyrants = $this->getDoctrine()->getRepository(Tyrants::class);
        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class);
        $rndNum = rand(8, 13);
        if ($rndNum == 12) {
            $rndNum++;
        }
        $soloCards = $cards->findBy(['cardType' => 'Solo', 'cardSet' => 'Undertow']);
        $rndTyrant = $tyrants->findOneBy(['id' => $rndNum]);
        $days = $rndTyrant->getDays();
        $tyrant = $rndTyrant->getName();
        $tyrantCards = $cards->findBy(['cardType' => $tyrant]);
        $encCards = $soloCards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);
        $buildEncounter = $encounters->findOneBy(['id' => '1']);
        $buildEncounter->setTyrantId($rndTyrant);
        if ($days >= 1) {
            $day1Num = rand(91, 94);
            $buildEncounter->setDay1Id($cards->findOneBy(['id' => $day1Num]));
        }

        if ($days >= 2) {
            $day2Num = rand(95, 98);
            $buildEncounter->setDay2Id($cards->findOneBy(['id' => $day2Num]));
        }

        if ($days >= 3) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay3Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;
            //$buildEncounter->setDay3Id($cards->findOneBy(['id' => '33']));
        }

        if ($days >= 4) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay4Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 5) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay5Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 6) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay6Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 7) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay7Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 8) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay8Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 9) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay9Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 10) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay10Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 11) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay11Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 12) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay12Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 13) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay13Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }
        //$results = $soloCards;
        //$results = $rndTyrant;

        $encCards = $soloCards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);

        return $this->handleView($this->view($buildEncounter));
    }

    /**
     * Generates a Challenge
     * @Rest\Get("/generateGeneralUndertow")
     *
     * @return Response
     */
    public function getGenerateUndertowGeneralEncounterAction()
    {
        $cards = $this->getDoctrine()->getRepository(Cards::class);
        $tyrants = $this->getDoctrine()->getRepository(Tyrants::class);
        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class);
        $rndNum = rand(8, 13);
        if ($rndNum == 12) {
            $rndNum++;
        }
        $generalCards = $cards->findBy(['cardType' => 'General', 'cardSet' => 'Undertow']);
        $rndTyrant = $tyrants->findOneBy(['id' => $rndNum]);
        $days = $rndTyrant->getDays();
        $tyrant = $rndTyrant->getName();
        $tyrantCards = $cards->findBy(['cardType' => $tyrant]);
        $encCards = $generalCards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);
        $buildEncounter = $encounters->findOneBy(['id' => '1']);
        $buildEncounter->setTyrantId($rndTyrant);
        if ($days >= 1) {
            $day1Num = rand(91, 94);
            $buildEncounter->setDay1Id($cards->findOneBy(['id' => $day1Num]));
        }

        if ($days >= 2) {
            $day2Num = rand(95, 98);
            $buildEncounter->setDay2Id($cards->findOneBy(['id' => $day2Num]));
        }

        if ($days >= 3) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay3Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;
            //$buildEncounter->setDay3Id($cards->findOneBy(['id' => '33']));
        }

        if ($days >= 4) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay4Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 5) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay5Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 6) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay6Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 7) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay7Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 8) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay8Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 9) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay9Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 10) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay10Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 11) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay11Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 12) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay12Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 13) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay13Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }
        //$results = $soloCards;
        //$results = $rndTyrant;

        $encCards = $generalCards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);

        return $this->handleView($this->view($buildEncounter));
    }

    /**
     * Generates a Challenge
     * @Rest\Get("/generate40Days")
     *
     * @return Response
     */
    public function getGenerate40DaysEncounterAction()
    {
        $cards = $this->getDoctrine()->getRepository(Cards::class);
        $tyrants = $this->getDoctrine()->getRepository(Tyrants::class);
        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class);
        $rndNum = rand(1, 13);
        if ($rndNum == 12) {
            $rndNum++;
        }
        $generalCards = $cards->findBy(['cardType' => 'Solo', 'cardSet' => '40 Days']);
        $rndTyrant = $tyrants->findOneBy(['id' => $rndNum]);
        $days = $rndTyrant->getDays();
        $tyrant = $rndTyrant->getName();
        $tyrantCards = $cards->findBy(['cardType' => $tyrant]);
        $encCards = $generalCards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);
        $buildEncounter = $encounters->findOneBy(['id' => '1']);
        $buildEncounter->setTyrantId($rndTyrant);
        if ($days >= 1) {
            if ($rndNum < 8) {
                $buildEncounter->setDay1Id($cards->findOneBy(['id' => '31']));
            } else {
                $day1Num = rand(91, 94);
                $buildEncounter->setDay1Id($cards->findOneBy(['id' => $day1Num]));
            }
        }

        if ($days >= 2) {
            if ($rndNum < 8) {
                $buildEncounter->setDay2Id($cards->findOneBy(['id' => '32']));
            } else {
                $day2Num = rand(95, 98);
                $buildEncounter->setDay2Id($cards->findOneBy(['id' => $day2Num]));
            }
        }

        if ($days >= 3) {
            if ($rndNum < 8) {
                $buildEncounter->setDay3Id($cards->findOneBy(['id' => '33']));
            } else {
                $randCardNum = rand(0, count($encCards));
                while (!isset($encCards[$randCardNum])) {
                    $randCardNum = rand(0, count($encCards));
                }
                $buildEncounter->setDay3Id($encCards[$randCardNum]);
                unset($encCards[$randCardNum]);
                $ar2 = array_values($encCards);
                $encCards = $ar2;
            }

        }

        if ($days >= 4) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay4Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 5) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay5Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 6) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay6Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 7) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay7Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 8) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay8Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 9) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay9Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 10) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay10Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 11) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay11Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 12) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay12Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 13) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay13Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }
        //$results = $soloCards;
        //$results = $rndTyrant;

        $encCards = $generalCards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);

        return $this->handleView($this->view($buildEncounter));
    }

    /**
     * Generates a Challenge
     * @Rest\Get("/generateGeneral40Days")
     *
     * @return Response
     */
    public function getGenerate40DaysGeneralEncounterAction()
    {
        $cards = $this->getDoctrine()->getRepository(Cards::class);
        $tyrants = $this->getDoctrine()->getRepository(Tyrants::class);
        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class);
        $rndNum = rand(1, 13);
        if ($rndNum == 12) {
            $rndNum++;
        }
        $generalCards = $cards->findBy(['cardType' => 'General', 'cardSet' => '40 Days']);
        $rndTyrant = $tyrants->findOneBy(['id' => $rndNum]);
        $days = $rndTyrant->getDays();
        $tyrant = $rndTyrant->getName();
        $tyrantCards = $cards->findBy(['cardType' => $tyrant]);
        $encCards = $generalCards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);
        $buildEncounter = $encounters->findOneBy(['id' => '1']);
        $buildEncounter->setTyrantId($rndTyrant);
        if ($days >= 1) {
            if ($rndNum < 8) {
                $buildEncounter->setDay1Id($cards->findOneBy(['id' => '31']));
            } else {
                $day1Num = rand(91, 94);
                $buildEncounter->setDay1Id($cards->findOneBy(['id' => $day1Num]));
            }
        }

        if ($days >= 2) {
            if ($rndNum < 8) {
                $buildEncounter->setDay2Id($cards->findOneBy(['id' => '32']));
            } else {
                $day2Num = rand(95, 98);
                $buildEncounter->setDay2Id($cards->findOneBy(['id' => $day2Num]));
            }
        }

        if ($days >= 3) {
            if ($rndNum < 8) {
                $buildEncounter->setDay3Id($cards->findOneBy(['id' => '33']));
            } else {
                $randCardNum = rand(0, count($encCards));
                while (!isset($encCards[$randCardNum])) {
                    $randCardNum = rand(0, count($encCards));
                }
                $buildEncounter->setDay3Id($encCards[$randCardNum]);
                unset($encCards[$randCardNum]);
                $ar2 = array_values($encCards);
                $encCards = $ar2;
            }

        }

        if ($days >= 4) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay4Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 5) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay5Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 6) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay6Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 7) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay7Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 8) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay8Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 9) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay9Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 10) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay10Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 11) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay11Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 12) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay12Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 13) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay13Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }
        //$results = $soloCards;
        //$results = $rndTyrant;

        $encCards = $generalCards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);

        return $this->handleView($this->view($buildEncounter));
    }

    /**
     * Generates a Challenge
     * @Rest\Get("/generateAgeBase")
     *
     * @return Response
     */
    public function getGenerateAgeEncounterAction()
    {
        $cards = $this->getDoctrine()->getRepository(Cards::class);
        $tyrants = $this->getDoctrine()->getRepository(Tyrants::class);
        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class);
        $rndNum = rand(1, 7);
        $generalCards = $cards->findBy(['cardType' => 'Solo', 'cardSet' => 'Base Set']);
        $rndTyrant = $tyrants->findOneBy(['id' => $rndNum]);
        $days = $rndTyrant->getDays();
        $tyrant = $rndTyrant->getName();
        $tyrantCards = $cards->findBy(['cardType' => $tyrant]);
        $encCards = $generalCards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);
        $buildEncounter = $encounters->findOneBy(['id' => '1']);
        $buildEncounter->setTyrantId($rndTyrant);
        if ($days >= 1) {

            $day1Num = rand(182, 188);
            $buildEncounter->setDay1Id($cards->findOneBy(['id' => $day1Num]));
        }

        if ($days >= 2) {
            $day2Num = rand(189, 195);
            $buildEncounter->setDay2Id($cards->findOneBy(['id' => $day2Num]));

        }

        if ($days >= 3) {
            $day3Num = rand(196, 202);
            $buildEncounter->setDay3Id($cards->findOneBy(['id' => $day3Num]));
        }

        if ($days >= 4) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay4Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 5) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay5Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 6) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay6Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 7) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay7Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 8) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay8Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 9) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay9Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 10) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay10Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 11) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay11Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 12) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay12Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 13) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay13Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }
        //$results = $soloCards;
        //$results = $rndTyrant;

        $encCards = $generalCards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);

        return $this->handleView($this->view($buildEncounter));
    }

    /**
     * Generates a Challenge
     * @Rest\Get("/generateGeneralAgeBase")
     *
     * @return Response
     */
    public function getGenerateAgeGeneralEncounterAction()
    {
        $cards = $this->getDoctrine()->getRepository(Cards::class);
        $tyrants = $this->getDoctrine()->getRepository(Tyrants::class);
        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class);
        $rndNum = rand(1, 7);
        $generalCards = $cards->findBy(['cardType' => 'General', 'cardSet' => 'Base Set']);
        $rndTyrant = $tyrants->findOneBy(['id' => $rndNum]);
        $days = $rndTyrant->getDays();
        $tyrant = $rndTyrant->getName();
        $tyrantCards = $cards->findBy(['cardType' => $tyrant]);
        $encCards = $generalCards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);
        $buildEncounter = $encounters->findOneBy(['id' => '1']);
        $buildEncounter->setTyrantId($rndTyrant);
        if ($days >= 1) {

            $day1Num = rand(182, 188);
            $buildEncounter->setDay1Id($cards->findOneBy(['id' => $day1Num]));
        }

        if ($days >= 2) {
            $day2Num = rand(189, 195);
            $buildEncounter->setDay2Id($cards->findOneBy(['id' => $day2Num]));

        }

        if ($days >= 3) {
            $day3Num = rand(196, 202);
            $buildEncounter->setDay3Id($cards->findOneBy(['id' => $day3Num]));
        }

        if ($days >= 4) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay4Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 5) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay5Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 6) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay6Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 7) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay7Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 8) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay8Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 9) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay9Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 10) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay10Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 11) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay11Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 12) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay12Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 13) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay13Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }
        //$results = $soloCards;
        //$results = $rndTyrant;

        $encCards = $generalCards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);

        return $this->handleView($this->view($buildEncounter));
    }

    /**
     * Generates a Challenge
     * @Rest\Get("/generateEncounterAll")
     *
     * @return Response
     */
    public function getGenerateEncounterAllAction()
    {
        $cards = $this->getDoctrine()->getRepository(Cards::class);
        $tyrants = $this->getDoctrine()->getRepository(Tyrants::class);
        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class);
        $rndNum = rand(1, 13);
        if ($rndNum == 12) {
            $rndNum++;
        }
        $solo40Cards = $cards->findBy(['cardType' => 'Solo', 'cardSet' => '40 Days']);
        $soloBaseCards = $cards->findBy(['cardType' => 'Solo', 'cardSet' => 'Base Set']);
        $soloUndertowCards = $cards->findBy(['cardType' => 'Solo', 'cardSet' => 'Undertow']);
        $rndTyrant = $tyrants->findOneBy(['id' => $rndNum]);
        $days = $rndTyrant->getDays();
        $tyrant = $rndTyrant->getName();
        $tyrantCards = $cards->findBy(['cardType' => $tyrant]);
        $encCards = $solo40Cards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);
        if ($rndNum < 8)
        {
            array_splice($encCards, count($encCards), 0, $soloBaseCards);
        }else {
            array_splice($encCards, count($encCards), 0, $soloUndertowCards);
        }
        $buildEncounter = $encounters->findOneBy(['id' => '1']);
        $buildEncounter->setTyrantId($rndTyrant);
        if ($days >= 1) {
            if ($rndNum < 8) {
                $age = rand(0,1);
                if ($age == 0) {
                    $buildEncounter->setDay1Id($cards->findOneBy(['id' => '31']));
                } else {
                    $day1Num = rand(182, 188);
                    $buildEncounter->setDay1Id($cards->findOneBy(['id' => $day1Num]));
                }
            } else {
                $age = rand(0,1);
                if ($age ==0) {
                    $day1Num = rand(91, 94);
                    $buildEncounter->setDay1Id($cards->findOneBy(['id' => $day1Num]));
                } else {
                    $day1Num = rand(182, 188);
                    $buildEncounter->setDay1Id($cards->findOneBy(['id' => $day1Num]));
                }
            }
        }

        if ($days >= 2) {
            if ($rndNum < 8) {
                $age = rand(0,1);
                if ($age == 0) {
                    $buildEncounter->setDay2Id($cards->findOneBy(['id' => '32']));
                } else {
                    $day2Num = rand(189, 195);
                    $buildEncounter->setDay2Id($cards->findOneBy(['id' => $day2Num]));
                }
            } else {
                $age = rand(0, 1);
                if ($age == 0) {
                    $day2Num = rand(95, 98);
                    $buildEncounter->setDay2Id($cards->findOneBy(['id' => $day2Num]));
                } else {
                    $day2Num = rand(189, 195);
                    $buildEncounter->setDay2Id($cards->findOneBy(['id' => $day2Num]));
                }
            }
        }

        if ($days >= 3) {
            if ($rndNum < 8) {
                $age = rand(0,1);
                if($age == 0 ){
                    $buildEncounter->setDay3Id($cards->findOneBy(['id' => '33']));
                } else {
                    $day3Num = rand(196, 202);
                    $buildEncounter->setDay3Id($cards->findOneBy(['id' => $day3Num]));
                }
            } else {
                $age = rand(0,1);
                if($age == 0) {
                    $randCardNum = rand(0, count($encCards));
                    while (!isset($encCards[$randCardNum])) {
                        $randCardNum = rand(0, count($encCards));
                    }
                    $buildEncounter->setDay3Id($encCards[$randCardNum]);
                    unset($encCards[$randCardNum]);
                    $ar2 = array_values($encCards);
                    $encCards = $ar2;
                } else {
                    $day3Num = rand(196, 202);
                    $buildEncounter->setDay3Id($cards->findOneBy(['id' => $day3Num]));
                }
            }

        }

        if ($days >= 4) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay4Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 5) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay5Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 6) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay6Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 7) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay7Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 8) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay8Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 9) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay9Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 10) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay10Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 11) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay11Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 12) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay12Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 13) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay13Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }
        //$results = $soloCards;
        //$results = $rndTyrant;

        return $this->handleView($this->view($buildEncounter));
    }

    /**
     * Generates a Challenge
     * @Rest\Get("/generateGeneralEncounterAll")
     *
     * @return Response
     */
    public function getGenerateGeneralEncounterAllAction()
    {
        $cards = $this->getDoctrine()->getRepository(Cards::class);
        $tyrants = $this->getDoctrine()->getRepository(Tyrants::class);
        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class);
        $rndNum = rand(1, 13);
        if ($rndNum == 12) {
            $rndNum++;
        }
        $general40Cards = $cards->findBy(['cardType' => 'Solo', 'cardSet' => '40 Days']);
        $generalBaseCards = $cards->findBy(['cardType' => 'Solo', 'cardSet' => 'Base Set']);
        $generalUndertowCards = $cards->findBy(['cardType' => 'Solo', 'cardSet' => 'Undertow']);
        $rndTyrant = $tyrants->findOneBy(['id' => $rndNum]);
        $days = $rndTyrant->getDays();
        $tyrant = $rndTyrant->getName();
        $tyrantCards = $cards->findBy(['cardType' => $tyrant]);
        $encCards = $general40Cards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);
        if ($rndNum < 8)
        {
            array_splice($encCards, count($encCards), 0, $generalBaseCards);
        }else {
            array_splice($encCards, count($encCards), 0, $generalUndertowCards);
        }
        $buildEncounter = $encounters->findOneBy(['id' => '1']);
        $buildEncounter->setTyrantId($rndTyrant);
        if ($days >= 1) {
            if ($rndNum < 8) {
                $age = rand(0,1);
                if ($age == 0) {
                    $buildEncounter->setDay1Id($cards->findOneBy(['id' => '31']));
                } else {
                    $day1Num = rand(182, 188);
                    $buildEncounter->setDay1Id($cards->findOneBy(['id' => $day1Num]));
                }
            } else {
                $age = rand(0,1);
                if ($age ==0) {
                    $day1Num = rand(91, 94);
                    $buildEncounter->setDay1Id($cards->findOneBy(['id' => $day1Num]));
                } else {
                    $day1Num = rand(182, 188);
                    $buildEncounter->setDay1Id($cards->findOneBy(['id' => $day1Num]));
                }
            }
        }

        if ($days >= 2) {
            if ($rndNum < 8) {
                $age = rand(0,1);
                if ($age == 0) {
                    $buildEncounter->setDay2Id($cards->findOneBy(['id' => '32']));
                } else {
                    $day2Num = rand(189, 195);
                    $buildEncounter->setDay2Id($cards->findOneBy(['id' => $day2Num]));
                }
            } else {
                $age = rand(0, 1);
                if ($age == 0) {
                    $day2Num = rand(95, 98);
                    $buildEncounter->setDay2Id($cards->findOneBy(['id' => $day2Num]));
                } else {
                    $day2Num = rand(189, 195);
                    $buildEncounter->setDay2Id($cards->findOneBy(['id' => $day2Num]));
                }
            }
        }

        if ($days >= 3) {
            if ($rndNum < 8) {
                $age = rand(0,1);
                if($age == 0 ){
                    $buildEncounter->setDay3Id($cards->findOneBy(['id' => '33']));
                } else {
                    $day3Num = rand(196, 202);
                    $buildEncounter->setDay3Id($cards->findOneBy(['id' => $day3Num]));
                }
            } else {
                $age = rand(0,1);
                if($age == 0) {
                    $randCardNum = rand(0, count($encCards));
                    while (!isset($encCards[$randCardNum])) {
                        $randCardNum = rand(0, count($encCards));
                    }
                    $buildEncounter->setDay3Id($encCards[$randCardNum]);
                    unset($encCards[$randCardNum]);
                    $ar2 = array_values($encCards);
                    $encCards = $ar2;
                } else {
                    $day3Num = rand(196, 202);
                    $buildEncounter->setDay3Id($cards->findOneBy(['id' => $day3Num]));
                }
            }

        }


        if ($days >= 4) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay4Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 5) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay5Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 6) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay6Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 7) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay7Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 8) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay8Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 9) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay9Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 10) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay10Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 11) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay11Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 12) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay12Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }

        if ($days >= 13) {
            $randCardNum = rand(0, count($encCards));
            while (!isset($encCards[$randCardNum])) {
                $randCardNum = rand(0, count($encCards));
            }
            $buildEncounter->setDay13Id($encCards[$randCardNum]);
            unset($encCards[$randCardNum]);
            $ar2 = array_values($encCards);
            $encCards = $ar2;

        }
        //$results = $soloCards;
        //$results = $rndTyrant;

        return $this->handleView($this->view($buildEncounter));
    }


}
