<?php

namespace App\Controller;

use App\Entity\EncounterPublish;
use App\Entity\MonthlyPublish;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Cards;
use App\Entity\Tyrants;
use App\Entity\Encounterlists;
use App\Entity\Monthlychallenges;
use App\Entity\Gearlocs;
use App\Entity\BATs;
use Doctrine\ORM\EntityManager;


/**
 * Card controller
 * @Route("/api", name="api_", methods={"GET"})
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
     * Lists all TyrantsController
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
     * @Rest\Get("/monthlys")
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
     * @Rest\Get("/generateSpliceDice")
     *
     * @return Response
     */
    public function getGenerateSliceDiceAction()
    {
        $cards = $this->getDoctrine()->getRepository(Cards::class);
        $tyrants = $this->getDoctrine()->getRepository(Tyrants::class);
        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class);
        $rndNum = rand(18, 23);
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
        }elseif ($rndNum > 7 && $rndNum < 14) {
            array_splice($encCards, count($encCards), 0, $soloUndertowCards);
        } else {
            array_splice($encCards, count($encCards), 0, $soloBaseCards);
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
     * @Rest\Get("/generateGeneralSpliceDice")
     *
     * @return Response
     */
    public function getGenerateGeneralSliceDiceAction()
    {
        $cards = $this->getDoctrine()->getRepository(Cards::class);
        $tyrants = $this->getDoctrine()->getRepository(Tyrants::class);
        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class);
        $rndNum = rand(18, 23);
        if ($rndNum == 12) {
            $rndNum++;
        }
        $general40Cards = $cards->findBy(['cardType' => 'General', 'cardSet' => '40 Days']);
        $generalBaseCards = $cards->findBy(['cardType' => 'General', 'cardSet' => 'Base Set']);
        $generalUndertowCards = $cards->findBy(['cardType' => 'General', 'cardSet' => 'Undertow']);
        $rndTyrant = $tyrants->findOneBy(['id' => $rndNum]);
        $days = $rndTyrant->getDays();
        $tyrant = $rndTyrant->getName();
        $tyrantCards = $cards->findBy(['cardType' => $tyrant]);
        $encCards = $general40Cards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);
        if ($rndNum < 8)
        {
            array_splice($encCards, count($encCards), 0, $generalBaseCards);
        }elseif ($rndNum > 7 && $rndNum < 14) {
            array_splice($encCards, count($encCards), 0, $generalUndertowCards);
        } else {
            array_splice($encCards, count($encCards), 0, $generalBaseCards);
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
        $rndNum = rand(1, 23);
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
        }elseif ($rndNum > 7 && $rndNum < 14) {
            array_splice($encCards, count($encCards), 0, $soloUndertowCards);
        } else {
            array_splice($encCards, count($encCards), 0, $soloBaseCards);
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
        $rndNum = rand(1, 23);
        if ($rndNum == 12) {
            $rndNum++;
        }
        $general40Cards = $cards->findBy(['cardType' => 'General', 'cardSet' => '40 Days']);
        $generalBaseCards = $cards->findBy(['cardType' => 'General', 'cardSet' => 'Base Set']);
        $generalUndertowCards = $cards->findBy(['cardType' => 'General', 'cardSet' => 'Undertow']);
        $rndTyrant = $tyrants->findOneBy(['id' => $rndNum]);
        $days = $rndTyrant->getDays();
        $tyrant = $rndTyrant->getName();
        $tyrantCards = $cards->findBy(['cardType' => $tyrant]);
        $encCards = $general40Cards;
        array_splice($encCards, count($encCards), 0, $tyrantCards);
        if ($rndNum < 8)
        {
            array_splice($encCards, count($encCards), 0, $generalBaseCards);
        }elseif ($rndNum > 7 && $rndNum < 14) {
            array_splice($encCards, count($encCards), 0, $generalUndertowCards);
        } else {
            array_splice($encCards, count($encCards), 0, $generalBaseCards);
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

    /**
     * Generates a Challenge
     * @Rest\Get("/generateRandomEncounterAll")
     *
     * @return Response
     */
    public function getGenerateRandomEncounterAllAction()
    {
        $cards = $this->getDoctrine()->getRepository(Cards::class);
        $tyrants = $this->getDoctrine()->getRepository(Tyrants::class);
        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class);
        $rndNum = rand(1, 23);
        if ($rndNum == 12) {
            $rndNum++;
        }
        $general40Cards = $cards->findBy(['cardType' => 'General', 'cardSet' => '40 Days']);
        $generalBaseCards = $cards->findBy(['cardType' => 'General', 'cardSet' => 'Base Set']);
        $generalUndertowCards = $cards->findBy(['cardType' => 'General', 'cardSet' => 'Undertow']);
        $solo40Cards = $cards->findBy(['cardType' => 'Solo', 'cardSet' => '40 Days']);
        $soloBaseCards = $cards->findBy(['cardType' => 'Solo', 'cardSet' => 'Base Set']);
        $soloUndertowCards = $cards->findBy(['cardType' => 'Solo', 'cardSet' => 'Undertow']);
        $rndTyrant = $tyrants->findOneBy(['id' => $rndNum]);
        $days = $rndTyrant->getDays();
        $tyrant = $rndTyrant->getName();
        $tyrantCards = $cards->findBy(['cardType' => $tyrant]);
        $rndSoloGeneral = rand(0,1);
        if ($rndSoloGeneral == 0) {
            $encCards = $general40Cards;
        } else {
            $encCards = $solo40Cards;
        }
        array_splice($encCards, count($encCards), 0, $tyrantCards);
        if ($rndNum < 8 && $rndSoloGeneral == 0 )
        {
            array_splice($encCards, count($encCards), 0, $generalBaseCards);
        } elseif ($rndNum > 7 && $rndNum < 14 && $rndSoloGeneral == 0) {
            array_splice($encCards, count($encCards), 0, $generalUndertowCards);
        } elseif ($rndNum > 14 && $rndSoloGeneral == 0) {
            array_splice($encCards, count($encCards), 0, $generalBaseCards);
            array_splice($encCards, count($encCards), 0, $generalUndertowCards);

        } elseif ( $rndNum < 8 && $rndSoloGeneral == 1 ) {
            array_splice($encCards, count($encCards), 0, $soloBaseCards);
        } elseif ($rndNum > 7 && $rndNum < 14 && $rndSoloGeneral == 1) {
            array_splice($encCards, count($encCards), 0, $soloUndertowCards);
        } else {
            array_splice($encCards, count($encCards), 0, $soloBaseCards);
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
     * @Route("/monthlys/{id}", name="monthly_by_id", requirements={"id" = "\d+"}))
     */
    public function monthlyById($id)
    {
        $repository = $this->getDoctrine()->getRepository(Monthlychallenges::class);
        $items = $repository->find($id);
        return $this->handleView($this->view($items));
    }

    /**
     * @Route("/encounters/{id}", name="encounters_by_id", requirements={"id" = "\d+"}))
     */
    public function encountersById($id)
    {
        $repository = $this->getDoctrine()->getRepository(Encounterlists::class);
        $items = $repository->find($id);
        return $this->handleView($this->view($items));
    }

    /**
     * @Route("/cards/{id}", name="cards_by_id", requirements={"id" = "\d+"})
     */
    public function getCardById($id)
    {
        $respository = $this->getDoctrine()->getRepository(Cards::class);
        $items = $respository->find($id);
        return $this->handleView($this->view($items));
    }

    /**
     * @Route("/gearlocs/{id}", name="gearlocs_by_id", requirements={"id" = "\d+"})
     */
    public function getGearlocById($id)
    {
        $respository = $this->getDoctrine()->getRepository(Gearlocs::class);
        $items = $respository->find($id);
        return $this->handleView($this->view($items));
    }

    /**
     * @Route("/tyrants/{id}", name="tyrants_by_id", requirements={"id" = "\d+"})
     */
    public function getTyrantById($id)
    {
        $respository = $this->getDoctrine()->getRepository(Tyrants::class);
        $items = $respository->find($id);
        return $this->handleView($this->view($items));
    }

    /**
     * @Route("/current", name="currentChallenges")
     */
    public function currentChallenges($year = null, $month = null)
    {
        if ($month === null) {
            $month = (int) date('m');
        }

        if ($year === null) {
            $year = (int) date('Y');
        }

        $startDate = new \DateTimeImmutable("$year-$month-01T00:00:00");
        $endDate = $startDate->modify('last day of this month')->setTime(23,59,59);

        $qb = $this->getDoctrine()->getRepository(Monthlychallenges::class)->createQueryBuilder('object');
        $qb->where('object.monthlydate BETWEEN :start AND :end');
        $qb->setParameter('start', $startDate->format('Y-m-d H:i:s'));
        $qb->setParameter('end', $endDate->format('Y-m-d H:i:s'));

        //$repository = $this->getDoctrine()->getRepository(Encounterlists::class);
        $currentChallenge = $qb->getQuery()->getResult();

        return $this->handleView($this->view($currentChallenge));
    }

    /**
     * @Route("/past/{year}/{month}", name="pastChallenges", requirements={"year" = "\d+", "month" = "\d+"})
     */
    public function pastChallenges($year, $month)
    {
        if ($month === null) {
            $month = (int) date('m');
        }

        if ($year === null) {
            $year = (int) date('Y');
        }

        $startDate = new \DateTimeImmutable("$year-$month-01T00:00:00");
        $endDate = $startDate->modify('last day of this month')->setTime(23,59,59);

        $qb = $this->getDoctrine()->getRepository(Monthlychallenges::class)->createQueryBuilder('object');
        $qb->where('object.monthlydate BETWEEN :start AND :end');
        $qb->setParameter('start', $startDate->format('Y-m-d H:i:s'));
        $qb->setParameter('end', $endDate->format('Y-m-d H:i:s'));

        //$repository = $this->getDoctrine()->getRepository(Encounterlists::class);
        $pastChallenge = $qb->getQuery()->getResult();

        return $this->handleView($this->view($pastChallenge));
    }

    /**
     * @Route("/generate/{party}/{base}/{undertow}/{fourdays}/{age}/{splice}/{tyrant}", name="generateSpecificChallenge", requirements={ "party" = "\d+", "base" = "\d+", "undertow" = "\d+", "fourdays" = "\d+", "age" = "\d+", "splice" = "\d+", "tyrant" = "\d+" })
     */
    public function generateSpecificChallenge(int $party, int $base, int $undertow, int $fourdays, int $age, int $splice, int $tyrant)
    {
        $settings = [];
        $encDeck = [];

        $settings['Usage'] = '/api/generate/{party 0|1|2}/{base 0|1|2}/{undertow 0|1|2}/{40days 0|1|2}/{age 0|1|2}/{splice 0|1|2}/{tyrant 0(random)|ID}';
        $settings['Random Tyrant'] = 'random tyrant will only be selected for sets not excluded';
        $cards = $this->getDoctrine()->getRepository(Cards::class);
        $tyrants = $this->getDoctrine()->getRepository(Tyrants::class);
        $encounters = $this->getDoctrine()->getRepository(Encounterlists::class);

        $general40Cards = $cards->findBy(['cardType' => 'General', 'cardSet' => '40 Days']);
        $generalBaseCards = $cards->findBy(['cardType' => 'General', 'cardSet' => 'Base Set']);
        $generalUndertowCards = $cards->findBy(['cardType' => 'General', 'cardSet' => 'Undertow']);
        $solo40Cards = $cards->findBy(['cardType' => 'Solo', 'cardSet' => '40 Days']);
        $soloBaseCards = $cards->findBy(['cardType' => 'Solo', 'cardSet' => 'Base Set']);
        $soloUndertowCards = $cards->findBy(['cardType' => 'Solo', 'cardSet' => 'Undertow']);

        if (isset($tyrant)) {
            $settings['tyrant'] = $tyrant;
            if($tyrant > 23){
                throw new HttpException(400, "A Tyrant must be selected 0=Random or use Tyrant ID. Current $tyrant not valid");
            }else{
                if($tyrant == 0){
                    $settings['Tyrant Status'] = 'Random';
                    if($base != 2 && $undertow !=2 && $splice !=2) {
                        $rndNum = rand(1, 23);
                        if ($rndNum == 12) {
                            $rndNum++;
                        }
                        $tyrant = $rndNum;
                    }elseif($base != 2 && $undertow !=2 && $splice == 2) {
                        $rndNum = rand(1, 13);
                        if ($rndNum == 12) {
                            $rndNum++;
                        }
                        $tyrant = $rndNum;
                    }elseif($base != 2 && $undertow ==2 && $splice != 2) {
                        $rndNum = rand(1, 23);
                        if ($rndNum >= 8 && $rndNum <=18) {
                            $newRand = rand(0,1);
                            if($newRand == 0){
                                $rndNum = rand(1,7);
                            }else
                                $rndNum = rand(18,23);
                        }
                        $tyrant = $rndNum;
                    }elseif($base != 2 && $undertow == 2 && $splice == 2){
                        $rndNum = rand(1, 7);
                        $tyrant = $rndNum;
                    }elseif($base == 2 && $undertow !=2 && $splice == 2) {
                        $rndNum = rand(8, 13);
                        if ($rndNum == 12) {
                            $rndNum++;
                        }
                        $tyrant = $rndNum;
                    }elseif($base == 2 && $undertow !=2 && $splice != 2) {
                        $rndNum = rand(13, 23);
                        if ($rndNum == 12) {
                            $rndNum++;
                        }
                        $tyrant = $rndNum;
                    }elseif($base == 2 && $undertow ==2 && $splice != 2) {
                        $rndNum = rand(18, 23);
                        $tyrant = $rndNum;
                    }else
                        throw new HttpException(400, "A Tyrant must be selected 0=Random or use Tyrant ID. Current $tyrant not valid, have you excluded all tyranta?");
                }
                $selected = $tyrants->findOneBy(['id' => $tyrant]);
                $tyrantName = $selected->getName();
                $settings['Tyrant'] = $tyrantName;
                $tyrantCards = $cards->findBy(['cardType' => $tyrantName]);
                if($tyrant >= 14 && $tyrant <= 17){
                    // For Trollin' 4 Fools! need some extra Tyrant Encounters (Shufflin in All NOM cards)
                    $tyrantCards = $cards->findBy(['cardType' => 'Nom']);
                    /*$tyrantCardsInc = $cards->findOneBy(['id' => 213]);
                    array_splice($tyrantCards, count($tyrantCards), 0, $tyrantCardsInc);*/
                }

                $days = $selected->getDays();
                //Start the encounter decks
                $encDeck = $tyrantCards;
            }
        }elseif(!isset($tyrant)){
            throw new HttpException(400, "A Tyrant must be selected 0=Random or use Tyrant ID");
        }

        if (isset($party)) {
            $settings['party'] = $party;
            if($party < 0 || $party > 2){
                throw new HttpException(400, "Party Size must be 0 = Random, 1 = Solo, 2 = General / Party");
            }
            if($party == 0){
                $settings['Party'] = 'Random';
                $rndNum = rand(1,2);
                $party = $rndNum;
                if($party == 1) {
                    $settings['Party-Set'] = 'Solo';
                }elseif($party == 2){
                    $settings['Party-Set'] = 'General';
                }
            }
            elseif($party == 1) {
                $settings['Party'] = 'Solo';
            }elseif($party == 2) {
                $settings['Party'] = 'General';
            }else
                throw new HttpException(400, "Party Size must be 0 = Random, 1 = Solo, 2 = General / Party");
        }

        if ( isset($base)) {
            $settings['base'] = $base;
            if($base < 0 || $base > 2) {
                throw new HttpException(400, "Base Set must be set to 0=Random, 1=Include, 2=Dont Include");
            }elseif($base == 0){
                $settings['Base Set']='Random';
                $rndNum = rand(0,1);
                if($rndNum == 0){
                    $settings['Base Set Status'] = 'Not Included';
                }
                else
                    if($tyrant < 8 || $tyrant > 13){
                        $settings['Base Set Status'] = 'Included';
                        if($party == 1){
                            array_splice($encDeck, count($encDeck), 0, $soloBaseCards);
                        }elseif($party ==2) {
                            array_splice($encDeck, count($encDeck), 0, $generalBaseCards);
                        }
                    }
                    else
                        $settings['Base Set Status'] = 'Excluded Because of Tyrant';
            }elseif($base == 1){
                $settings['Base Set Status'] = 'Included';
                if($party == 1){
                    array_splice($encDeck, count($encDeck), 0, $soloBaseCards);
                }elseif($party == 2) {
                    array_splice($encDeck, count($encDeck), 0, $generalBaseCards);
                }
            }else
                $settings['Base Set Status'] = 'Excluded by Option';
        }else
            throw new HttpException(400, "Base Set must be set to 0=Random, 1=Include, 2=Dont Include");

        if (isset($undertow)){
            $settings['undertow'] = $undertow;
            if($undertow < 0 || $undertow > 2) {
                throw new HttpException(400, "Undertow must be set to 0=Random, 1=Include, 2=Dont Include");
            }elseif($undertow == 0){
                $settings['Undertow']='Random';
                $rndNum = rand(0,1);
                if($rndNum == 0){
                    $settings['Undertow Status'] = 'Not Included';
                }
                else
                    if($tyrant >= 8){
                        $settings['Undertow Status'] = 'Included';
                        if($party == 1){
                            array_splice($encDeck, count($encDeck), 0, $soloUndertowCards);
                        }elseif($party ==2) {
                            array_splice($encDeck, count($encDeck), 0, $generalUndertowCards);
                        }
                    }
                    else
                        $settings['Undertow Status'] = 'Excluded Because of Tyrant';
            }elseif($undertow == 1){
                $settings['Undertow Status'] = 'Included';
                if($party == 1){
                    array_splice($encDeck, count($encDeck), 0, $soloUndertowCards);
                }elseif($party ==2) {
                    array_splice($encDeck, count($encDeck), 0, $generalUndertowCards);
                }
            }else
                $settings['Undertow Status'] = ' Exlcuded by Option';
        }else
            throw new HttpException(400, "Undertow must be set to 0=Random, 1=Include, 2=Dont Include");

        if (isset($fourdays)){
            $settings['fourdays'] = $fourdays;
            if($fourdays < 0 || $fourdays > 2){
                throw new HttpException(400, "40 Days in Daelore must be set to 0=Random, 1=Include, 2=Dont Include");
            }
            if($fourdays == 0){
                $settings['40 Days'] = 'Random';
                $rndDaysNum = rand(0,1);
                if($rndDaysNum == 0){
                    $settings['40 Days Status'] = 'Not Included';
                }elseif($rndDaysNum == 1){
                    $settings['40 Days Status'] = 'Included';
                    if($party == 1){
                        array_splice($encDeck, count($encDeck), 0, $solo40Cards);
                    }elseif($party ==2) {
                        array_splice($encDeck, count($encDeck), 0, $general40Cards);
                    }else
                        $settings['40 Days Status'] = 'Unable to determine party at this point';
                }else
                    $settings['40 Days Status'] = 'Random Generation Failed';

            }elseif($fourdays == 1){
                $settings['40 Days'] = 'Included';
                if($party == 1){
                    array_splice($encDeck, count($encDeck), 0, $solo40Cards);
                }elseif($party ==2) {
                    array_splice($encDeck, count($encDeck), 0, $general40Cards);
                }else
                    $settings['40 Days Status'] = 'Unable to determine party at this point';
            }else
                $settings['40 Days Status'] ='Excluded by Option';
        }else
            throw new HttpException(400, "40 Days in Daelore must be set to 0=Random, 1=Include, 2=Dont Include");

        if (isset($age)) {
            $settings['age'] = $age;
            if($age <0 || $age > 2){
                throw new HttpException(400, "Age of Tyranny must be set to 0=Random, 1=Include, 2=Dont Include");
            }
            if($age == 0){
                $settings['Age Status'] = 'Random';
            }elseif ($age == 1){
                $settings['Age Status'] = 'Included';
            }elseif ($age == 2){
                $settings['Age Status'] = 'Excluded by Option';
            }else
                throw new HttpException(400, "Age of Tyranny must be set to 0=Random, 1=Include, 2=Dont Include");
        }else
            throw new HttpException(400, "Age of Tyranny must be set to 0=Random, 1=Include, 2=Dont Include");

        if (isset($splice)){
            $settings['splice'] = $splice;
            if($splice < 0 || $splice > 2) {
                throw new HttpException(400, "Splice & Dice must be set to 0=Random, 1=Include, 2=Dont Include");
            }
            if($splice == 0){
                $settings['Splice Dice'] = 'Random';
            }elseif($splice == 1){
                $settings['Splice Dice Status'] = 'Included';
            }
        }else
            throw new HttpException(400, "Splice & Dice must be set to 0=Random, 1=Include, 2=Dont Include");

        //Need to check that we have enough freaking cards to build
        if($days > count($encDeck))
        {
            // We need to do some stuff here
            $settings['Error'] = 'Not Enough Cards';
            if(isset($tyrant)){
                $settings['Error'] = 'Emergency Injection of Cards base on Tyrant';
                if($tyrant > 0 && $tyrant < 8){
                    $settings['Error 1'] = 'Base Set Cards Injected';
                    if ($party == 1) {
                        array_splice($encDeck, count($encDeck), 0, $soloBaseCards);
                    }elseif ($party == 2) {
                        array_splice($encDeck, count($encDeck), 0, $generalBaseCards);
                    }else
                        $settings['Error 2'] = 'Unable to Determine Party in Emergency';
                }elseif($tyrant > 7 && $tyrant < 14){
                    $settings['Error 1'] = 'Undertow Cards Injected';
                    if ($party == 1) {
                        array_splice($encDeck, count($encDeck), 0, $soloUndertowCards);
                    }elseif ($party == 2) {
                        array_splice($encDeck, count($encDeck), 0, $generalUndertowCards);
                    }else
                        $settings['Error 2'] = 'Unable to Determine Party in Emergency';
                }elseif($tyrant > 13 && $tyrant < 23){
                    $settings['Error 1'] = 'Splice and Dice Tyrant Detected, Undertow added';
                    if ($party == 1) {
                        array_splice($encDeck, count($encDeck), 0, $soloUndertowCards);
                    }elseif ($party == 2) {
                        array_splice($encDeck, count($encDeck), 0, $generalUndertowCards);
                    }else
                        $settings['Error 2'] = 'Unable to Determine Party in Emergency';
                }else
                    throw new HttpException(400, 'Failed to generate enough cards in an emergency');
            }else
                throw new HttpException(400, 'Failed to generate enough cards in the encounter deck');
        }

        $settings['Tyrant Days'] = $days;
        $settings['Encounter Deck Size'] = count($encDeck);
        $initialEncDeck = $encDeck;

        $buildEncounter = $encounters->findOneBy(['id' => '1']);
        $buildEncounter->setTyrantId($selected);
        if ($days >= 1) {
            if ($tyrant < 8) {
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

        if ($days >= 2) {
            if ($tyrant < 8) {
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
            if ($tyrant < 8) {
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
                    $randCardNum = rand(0, count($encDeck));
                    while (!isset($encDeck[$randCardNum])) {
                        $randCardNum = rand(0, count($encDeck));
                    }
                    $buildEncounter->setDay3Id($encDeck[$randCardNum]);
                    unset($encDeck[$randCardNum]);
                    $ar2 = array_values($encDeck);
                    $encDeck = $ar2;
                } else {
                    $day3Num = rand(196, 202);
                    $buildEncounter->setDay3Id($cards->findOneBy(['id' => $day3Num]));
                }
            }

        }


        if ($days >= 4) {
            $randCardNum = rand(0, count($encDeck));
            while (!isset($encDeck[$randCardNum])) {
                $randCardNum = rand(0, count($encDeck));
            }
            $buildEncounter->setDay4Id($encDeck[$randCardNum]);
            unset($encDeck[$randCardNum]);
            $ar2 = array_values($encDeck);
            $encDeck = $ar2;

        }

        if ($days >= 5) {
            $randCardNum = rand(0, count($encDeck));
            while (!isset($encDeck[$randCardNum])) {
                $randCardNum = rand(0, count($encDeck));
            }
            $buildEncounter->setDay5Id($encDeck[$randCardNum]);
            unset($encDeck[$randCardNum]);
            $ar2 = array_values($encDeck);
            $encCards = $ar2;

        }

        if ($days >= 6) {
            $randCardNum = rand(0, count($encDeck));
            while (!isset($encDeck[$randCardNum])) {
                $randCardNum = rand(0, count($encDeck));
            }
            $buildEncounter->setDay6Id($encDeck[$randCardNum]);
            unset($encDeck[$randCardNum]);
            $ar2 = array_values($encDeck);
            $encDeck = $ar2;

        }

        if ($days >= 7) {
            $randCardNum = rand(0, count($encDeck));
            while (!isset($encDeck[$randCardNum])) {
                $randCardNum = rand(0, count($encDeck));
            }
            $buildEncounter->setDay7Id($encDeck[$randCardNum]);
            unset($encDeck[$randCardNum]);
            $ar2 = array_values($encDeck);
            $encDeck = $ar2;

        }

        if ($days >= 8) {
            $randCardNum = rand(0, count($encDeck));
            while (!isset($encDeck[$randCardNum])) {
                $randCardNum = rand(0, count($encDeck));
            }
            $buildEncounter->setDay8Id($encDeck[$randCardNum]);
            unset($encDeck[$randCardNum]);
            $ar2 = array_values($encDeck);
            $encDeck = $ar2;

        }

        if ($days >= 9) {
            $randCardNum = rand(0, count($encDeck));
            while (!isset($encDeck[$randCardNum])) {
                $randCardNum = rand(0, count($encDeck));
            }
            $buildEncounter->setDay9Id($encDeck[$randCardNum]);
            unset($encDeck[$randCardNum]);
            $ar2 = array_values($encDeck);
            $encDeck = $ar2;

        }

        if ($days >= 10) {
            $randCardNum = rand(0, count($encDeck));
            while (!isset($encDeck[$randCardNum])) {
                $randCardNum = rand(0, count($encDeck));
            }
            $buildEncounter->setDay10Id($encDeck[$randCardNum]);
            unset($encDeck[$randCardNum]);
            $ar2 = array_values($encDeck);
            $encDeck = $ar2;

        }

        if ($days >= 11) {
            $randCardNum = rand(0, count($encDeck));
            while (!isset($encDeck[$randCardNum])) {
                $randCardNum = rand(0, count($encDeck));
            }
            $buildEncounter->setDay11Id($encDeck[$randCardNum]);
            unset($encDeck[$randCardNum]);
            $ar2 = array_values($encDeck);
            $encDeck = $ar2;

        }

        if ($days >= 12) {
            $randCardNum = rand(0, count($encDeck));
            while (!isset($encDeck[$randCardNum])) {
                $randCardNum = rand(0, count($encDeck));
            }
            $buildEncounter->setDay12Id($encDeck[$randCardNum]);
            unset($encDeck[$randCardNum]);
            $ar2 = array_values($encDeck);
            $encDeck = $ar2;

        }

        if ($days >= 13) {
            $randCardNum = rand(0, count($encDeck));
            while (!isset($encDeck[$randCardNum])) {
                $randCardNum = rand(0, count($encDeck));
            }
            $buildEncounter->setDay13Id($encDeck[$randCardNum]);
            unset($encDeck[$randCardNum]);
            $ar2 = array_values($encDeck);
            $encDeck = $ar2;

        }

        /* json_encode($settings); */
        /* return $this->json($settings); */
        $final = array_merge_recursive((array)$settings, (array)$buildEncounter);
        $finalSettings = array_merge_recursive((array) $final, (array) $initialEncDeck);

        /*return $this->handleView($this->view($buildEncounter));*/
        return $this->handleView($this->view($finalSettings));
    }

    /**
     * Lists all BATsController
     * @Rest\Get("/bats")
     *
     * @return Response
     */
    public function getBatsAction()
    {
        $repository = $this->getDoctrine()->getRepository(BATs::class);
        $bats = $repository->findAll();
        return $this->handleView($this->view($bats));
        //return $this->json(['Coming'=>'Soon']);
    }
}
