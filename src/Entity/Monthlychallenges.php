<?php

namespace App\Entity;

use DateTime;
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
     * @var DateTime
     *
     * @ORM\Column(name="MonthlyDate", type="date", nullable=false)
     */
    private $monthlydate;

    /**
     * @var \Encounterlists
     *
     * @ORM\ManyToOne(targetEntity="Encounterlists")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EncounterListId", referencedColumnName="Id")
     * })
     */
    private $encounterlistid;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getChallengeset()
    {
        return $this->challengeset;
    }

    /**
     * @param mixed $challengeset
     */
    public function setChallengeset(string $challengeset)
    {
        $this->challengeset = $challengeset;
    }

    /**
     * @return string
     */
    public function getChallengetype()
    {
        return $this->challengetype;
    }

    /**
     * @param string $challengetype
     */
    public function setChallengetype(string $challengetype)
    {
        $this->challengetype = $challengetype;
    }

    /**
     * @return DateTime
     */
    public function getMonthlydate()
    {
        return $this->monthlydate;
    }

    /**
     * @param DateTime $monthlydate
     */
    public function setMonthlydate(DateTime $monthlydate)
    {
        $this->monthlydate = $monthlydate;
    }

    /**
     * @return \Encounterlists
     */
    public function getEncounterlistid()
    {
        return $this->encounterlistid;
    }

    /**
     * @param \Encounterlists $encounterlistid
     */
    public function setEncounterlistid(Encounterlists $encounterlistid)
    {
        $this->encounterlistid = $encounterlistid;
    }



}
