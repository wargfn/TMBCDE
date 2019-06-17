<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encounterlists
 *
 * @ORM\Table(name="EncounterLists", indexes={@ORM\Index(name="fk_day5Id", columns={"Day5Id"}), @ORM\Index(name="fk_day7Id", columns={"Day7Id"}), @ORM\Index(name="fk_day10Id", columns={"Day10Id"}), @ORM\Index(name="fk_day12Id", columns={"Day12Id"}), @ORM\Index(name="fk_day1Id", columns={"Day1Id"}), @ORM\Index(name="fk_day8Id", columns={"Day8Id"}), @ORM\Index(name="fk_day3Id", columns={"Day3Id"}), @ORM\Index(name="fk_day4Id", columns={"Day4Id"}), @ORM\Index(name="fk_day6Id", columns={"Day6Id"}), @ORM\Index(name="fk_day9Id", columns={"Day9Id"}), @ORM\Index(name="fk_day11Id", columns={"Day11Id"}), @ORM\Index(name="fk_tyrantId", columns={"TyrantId"}), @ORM\Index(name="fk_day13Id", columns={"Day13Id"}), @ORM\Index(name="fk_day2Id", columns={"Day2Id"})})
 * @ORM\Entity
 */
class Encounterlists
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
     * @var \Cards
     *
     * @ORM\ManyToOne(targetEntity="Cards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Day10Id", referencedColumnName="Id")
     * })
     */
    private $day10id;

    /**
     * @var \Cards
     *
     * @ORM\ManyToOne(targetEntity="Cards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Day11Id", referencedColumnName="Id")
     * })
     */
    private $day11id;

    /**
     * @var \Cards
     *
     * @ORM\ManyToOne(targetEntity="Cards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Day12Id", referencedColumnName="Id")
     * })
     */
    private $day12id;

    /**
     * @var \Cards
     *
     * @ORM\ManyToOne(targetEntity="Cards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Day13Id", referencedColumnName="Id")
     * })
     */
    private $day13id;

    /**
     * @var \Cards
     *
     * @ORM\ManyToOne(targetEntity="Cards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Day1Id", referencedColumnName="Id")
     * })
     */
    private $day1id;

    /**
     * @var \Cards
     *
     * @ORM\ManyToOne(targetEntity="Cards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Day2Id", referencedColumnName="Id")
     * })
     */
    private $day2id;

    /**
     * @var \Cards
     *
     * @ORM\ManyToOne(targetEntity="Cards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Day3Id", referencedColumnName="Id")
     * })
     */
    private $day3id;

    /**
     * @var \Cards
     *
     * @ORM\ManyToOne(targetEntity="Cards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Day4Id", referencedColumnName="Id")
     * })
     */
    private $day4id;

    /**
     * @var \Cards
     *
     * @ORM\ManyToOne(targetEntity="Cards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Day5Id", referencedColumnName="Id")
     * })
     */
    private $day5id;

    /**
     * @var \Cards
     *
     * @ORM\ManyToOne(targetEntity="Cards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Day6Id", referencedColumnName="Id")
     * })
     */
    private $day6id;

    /**
     * @var \Cards
     *
     * @ORM\ManyToOne(targetEntity="Cards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Day7Id", referencedColumnName="Id")
     * })
     */
    private $day7id;

    /**
     * @var \Cards
     *
     * @ORM\ManyToOne(targetEntity="Cards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Day8Id", referencedColumnName="Id")
     * })
     */
    private $day8id;

    /**
     * @var \Cards
     *
     * @ORM\ManyToOne(targetEntity="Cards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Day9Id", referencedColumnName="Id")
     * })
     */
    private $day9id;

    /**
     * @var \Tyrants
     *
     * @ORM\ManyToOne(targetEntity="Tyrants")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TyrantId", referencedColumnName="Id")
     * })
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
