<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Monthlychallenges
 *
 * @ORM\Table(name="MonthlyChallenges", indexes={@ORM\Index(name="fk_encounters", columns={"EncounterListId"})})
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
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255, nullable=false)
     */
    public $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=false)
     */
    public $description;

    /**
     * @var string
     *
     * @ORM\Column(name="ChallengeSet", type="string", length=255, nullable=false)
     */
    public $challengeset;

    /**
     * @var string
     *
     * @ORM\Column(name="ChallengeType", type="string", length=255, nullable=false)
     */
    public $challengetype;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MonthlyDate", type="date", nullable=false)
     */
    public $monthlydate;

    /**
     * @var \Encounterlists
     *
     * @ORM\ManyToOne(targetEntity="Encounterlists")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EncounterListId", referencedColumnName="Id")
     * })
     */
    public $encounterlistid;


}
