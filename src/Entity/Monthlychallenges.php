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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getChallengeset(): string
    {
        return $this->challengeset;
    }

    /**
     * @param string $challengeset
     */
    public function setChallengeset(string $challengeset): void
    {
        $this->challengeset = $challengeset;
    }

    /**
     * @return string
     */
    public function getChallengetype(): string
    {
        return $this->challengetype;
    }

    /**
     * @param string $challengetype
     */
    public function setChallengetype(string $challengetype): void
    {
        $this->challengetype = $challengetype;
    }

    /**
     * @return \DateTime
     */
    public function getMonthlydate(): \DateTime
    {
        return $this->monthlydate;
    }

    /**
     * @param \DateTime $monthlydate
     */
    public function setMonthlydate(\DateTime $monthlydate): void
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
    public function setEncounterlistid(Encounterlists $encounterlistid): void
    {
        $this->encounterlistid = $encounterlistid;
    }



}
