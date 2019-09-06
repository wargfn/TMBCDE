<?php


namespace App\Controller;


use App\Entity\Cards;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/cards", name="cards_")
 */
class CardsController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $cards = $this->getDoctrine()->getRepository(Cards::class)->findAll();

        if(!$cards) {
            throw $this->createNotFoundException('No Cards Found');
        }

        return $this->render('default/cards.html.twig',
            array('cards'=>$cards)
        );
    }

    /**
     * @Route("/{id}", name="get_by_id", requirements={"id" = "\d+"})
     */
    public function getCardById($id)
    {
        $cards = $this->getDoctrine()->getRepository(Cards::class)->find($id);

        if(!$cards) {
            throw $this->createNotFoundException('No Cards Found');
        }

        return $this->render('default/cards.html.twig',
            array('cards'=>$cards)
        );
    }
}