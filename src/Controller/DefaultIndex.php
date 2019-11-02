<?php


namespace App\Controller;

use App\Entity\Monthlychallenges;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class DefaultIndex extends AbstractController
{

    /**
     * @Route("/", name="default_index")
     */
    public function index($year = null, $month = null)
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
        $qb->setParameter('start', $startDate->format('Y-m-d'));
        $qb->setParameter('end', $endDate->format('Y-m-d'));

        //$repository = $this->getDoctrine()->getRepository(Encounterlists::class);
        $currentChallenges = $qb->getQuery()->getResult();

        if(!$currentChallenges)
        {
            throw $this->createNotFoundException('No Monthly Challenges found');
        }

       return $this->render('default/index.html.twig',
           array('currentChallenges'=>$currentChallenges)
           );
    }

}