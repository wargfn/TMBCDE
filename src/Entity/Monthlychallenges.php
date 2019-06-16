<?php

namespace app\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Monthlychallenges
 *
 * @ORM\Table(name="MonthlyChallenges")
 * @ORM\Entity
 */
class Monthlychallenges
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="ChallengeSet", type="string", length=255, nullable=false)
     */
    private $challengeset;

    /**
     * @var string
     *
     * @ORM\Column(name="ChallengeType", type="string", length=255, nullable=false)
     */
    private $challengetype;

    /**
     * @var string
     *
     * @ORM\Column(name="EncounterListId", type="string", length=255, nullable=false)
     */
    private $encounterlistid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MonthlyDate", type="date", nullable=false)
     */
    private $monthlydate;


}
