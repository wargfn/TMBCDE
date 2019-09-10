<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MonthlyPublish
 *
 * @ORM\Table(name="MonthlyChallenges")
 * @ORM\Entity
 */
class MonthlyPublish
{
    /**
     * @ORM\Column(name="Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     **/
    public $id;

    /**
     * @ORM\Column(name="Name", type="string", length=255, nullable=false)
     */
    public $name;

    /**
     * @ORM\Column(name="Description", type="string", length=255, nullable=false)
     */
    public $description;

    /**
     * @ORM\Column(name="ChallengeSet", type="string", length=255, nullable=false)
     */
    public $challengeset;

    /**
     * @ORM\Column(name="ChallengeType", type="string", length=255, nullable=false)
     */
    public $challengetype;

    /**
     * @ORM\Column(name="MonthlyDate", type="datetime", nullable=false)
     */
    public $monthlydate;

    /**
     *@ORM\Column(name="EncounterListId", nullable=false)
     * })
     */
    public $encounterlistid;

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
    public function setId($id): void
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
    public function setName($name): void
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
    public function setDescription($description): void
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
    public function setChallengeset($challengeset): void
    {
        $this->challengeset = $challengeset;
    }

    /**
     * @return mixed
     */
    public function getChallengetype()
    {
        return $this->challengetype;
    }

    /**
     * @param mixed $challengetype
     */
    public function setChallengetype($challengetype): void
    {
        $this->challengetype = $challengetype;
    }

    /**
     * @return mixed
     */
    public function getMonthlydate()
    {
        return $this->monthlydate;
    }

    /**
     * @param mixed $monthlydate
     */
    public function setMonthlydate($monthlydate): void
    {
        $this->monthlydate = $monthlydate;
    }

    /**
     * @return mixed
     */
    public function getEncounterlistid()
    {
        return $this->encounterlistid;
    }

    /**
     * @param mixed $encounterlistid
     */
    public function setEncounterlistid($encounterlistid): void
    {
        $this->encounterlistid = $encounterlistid;
    }


}
