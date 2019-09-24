<?php


namespace App\Controller;

use App\Entity\Tyrants;
use App\Entity\Encounterlists;
use App\Form\GenerateType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * Class GenerateController
 * @Route("/generate", name="generate_")
 */
class GenerateController extends AbstractController
{

    /**
     * @Route("/", name="index", METHODS={"GET"})
     */
    public function index()
    {

        $form = $this->createForm(GenerateType::class);

        return $this->render('default/generate.html.twig', [
            'our_form' => $form->createView()
    ]);
    }


}