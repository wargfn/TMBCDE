<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EncounterPublish
 *
 * @ORM\Table(name="EncounterLists")
 * @ORM\Entity
 */
class EncounterPublish
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
     * @ORM\Column(name="Day10Id", type="integer", nullable=true)
     */
    private $day10id;

    /**
     * @ORM\Column(name="Day11Id", type="integer", nullable=true)
     */
    private $day11id;

    /**
     * @ORM\Column(name="Day12Id", type="integer", nullable=true)
     */
    private $day12id;

    /**
     * @ORM\Column(name="Day13Id", type="integer", nullable=true)
     */
    private $day13id;

    /**
     * @ORM\Column(name="Day1Id", type="integer", nullable=false)
     */
    private $day1id;

    /**
     * @ORM\Column(name="Day2Id", type="integer", nullable=false)
     */
    private $day2id;

    /**
     * @ORM\Column(name="Day3Id", type="integer", nullable=false)
     */
    private $day3id;

    /**
     * @ORM\Column(name="Day4Id", type="integer", nullable=false)
     */
    private $day4id;

    /**
     * @ORM\Column(name="Day5Id", type="integer", nullable=false)
     */
    private $day5id;

    /**
     * @ORM\Column(name="Day6Id", type="integer", nullable=false)
     */
    private $day6id;

    /**
     * @ORM\Column(name="Day7Id", type="integer", nullable=false)
     */
    private $day7id;

    /**
     * @ORM\Column(name="Day8Id", type="integer", nullable=true)
     */
    private $day8id;

    /**
     * @ORM\Column(name="Day9Id", type="integer", nullable=true)
     */
    private $day9id;

    /**
     * @ORM\Column(name="TyrantId", type="integer", nullable=false)
     */
    private $tyrantid;

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
    public function setId($id)
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
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTyrantId()
    {
        return $this->tyrantid;
    }
    /**
     * @param mixed $tyrantid
     */
    public function setTyrantId($tyrantid)
    {
        $this->tyrantid = $tyrantid;
    }

    /**
     * @return mixed
     */
    public function getDay1Id()
    {
        return $this->day1id;
    }
    /**
     * @param mixed $day1id
     */
    public function setDay1Id($day1id)
    {
        $this->day1id = $day1id;
    }

    /**
     * @return mixed
     */
    public function getDay2Id()
    {
        return $this->day2id;
    }
    /**
     * @param mixed $day2id
     */
    public function setDay2Id($day2id)
    {
        $this->day2id = $day2id;
    }

    /**
     * @return mixed
     */
    public function getDay3Id()
    {
        return $this->day3id;
    }
    /**
     * @param mixed $day3id
     */
    public function setDay3Id($day3id)
    {
        $this->day3id = $day3id;
    }

    /**
     * @return mixed
     */
    public function getDay4Id()
    {
        return $this->day4id;
    }
    /**
     * @param mixed $day4id
     */
    public function setDay4Id($day4id)
    {
        $this->day4id = $day4id;
    }

    /**
     * @return mixed
     */
    public function getDay5Id()
    {
        return $this->day5id;
    }
    /**
     * @param mixed $day5id
     */
    public function setDay5Id($day5id)
    {
        $this->day5id = $day5id;
    }

    /**
     * @return mixed
     */
    public function getDay6Id()
    {
        return $this->day6id;
    }
    /**
     * @param mixed $day6id
     */
    public function setDay6Id($day6id)
    {
        $this->day6id = $day6id;
    }

    /**
     * @return mixed
     */
    public function getDay7Id()
    {
        return $this->day7id;
    }
    /**
     * @param mixed $day7id
     */
    public function setDay7Id($day7id)
    {
        $this->day7id = $day7id;
    }

    /**
     * @return mixed
     */
    public function getDay8Id()
    {
        return $this->day8id;
    }
    /**
     * @param mixed $day8id
     */
    public function setDay8Id($day8id)
    {
        $this->day8id = $day8id;
    }

    /**
     * @return mixed
     */
    public function getDay9Id()
    {
        return $this->day9id;
    }
    /**
     * @param mixed $day9id
     */
    public function setDay9Id($day9id)
    {
        $this->day9id = $day9id;
    }

    /**
     * @return mixed
     */
    public function getDay10Id()
    {
        return $this->day10id;
    }
    /**
     * @param mixed $day10id
     */
    public function setDay10Id($day10id)
    {
        $this->day10id = $day10id;
    }

    /**
     * @return mixed
     */
    public function getDay11Id()
    {
        return $this->day11id;
    }
    /**
     * @param mixed $day11id
     */
    public function setDay11Id($day11id)
    {
        $this->day11id = $day11id;
    }

    /**
     * @return mixed
     */
    public function getDay12Id()
    {
        return $this->day12id;
    }
    /**
     * @param mixed $day12id
     */
    public function setDay12Id($day12id)
    {
        $this->day12id = $day12id;
    }

    /**
     * @return mixed
     */
    public function getDay13Id()
    {
        return $this->day13id;
    }
    /**
     * @param mixed $day13id
     */
    public function setDay13Id($day13id)
    {
        $this->day13id = $day13id;
    }

}

