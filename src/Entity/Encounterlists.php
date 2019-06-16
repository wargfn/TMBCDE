<?php

namespace app\Entity;

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


}
