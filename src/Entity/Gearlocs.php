<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gearlocs
 *
 * @ORM\Table(name="Gearlocs")
 * @ORM\Entity
 */
class Gearlocs
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
     * @var int
     *
     * @ORM\Column(name="Health", type="integer", nullable=false)
     */
    public $health;

    /**
     * @var int
     *
     * @ORM\Column(name="Dexterity", type="integer", nullable=false)
     */
    public $dexterity;

    /**
     * @var int
     *
     * @ORM\Column(name="Attack", type="integer", nullable=false)
     */
    public $attack;

    /**
     * @var int
     *
     * @ORM\Column(name="Defense", type="integer", nullable=false)
     */
    public $defense;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ability1", type="string", length=255, nullable=true)
     */
    private $ability1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ability2", type="string", length=255, nullable=true)
     */
    private $ability2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ability3", type="string", length=255, nullable=true)
     */
    private $ability3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ability4", type="string", length=255, nullable=true)
     */
    private $ability4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ability5", type="string", length=255, nullable=true)
     */
    private $ability5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ability6", type="string", length=255, nullable=true)
     */
    private $ability6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ability7", type="string", length=255, nullable=true)
     */
    private $ability7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ability8", type="string", length=255, nullable=true)
     */
    private $ability8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ability9", type="string", length=255, nullable=true)
     */
    private $ability9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ability10", type="string", length=255, nullable=true)
     */
    private $ability10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ability11", type="string", length=255, nullable=true)
     */
    private $ability11;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ability12", type="string", length=255, nullable=true)
     */
    private $ability12;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ability13", type="string", length=255, nullable=true)
     */
    private $ability13;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ability14", type="string", length=255, nullable=true)
     */
    private $ability14;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ability15", type="string", length=255, nullable=true)
     */
    private $ability15;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ability16", type="string", length=255, nullable=true)
     */
    private $ability16;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Loot1", type="string", length=255, nullable=true)
     */
    private $loot1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Loot2", type="string", length=255, nullable=true)
     */
    private $loot2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Loot3", type="string", length=255, nullable=true)
     */
    private $loot3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Loot4", type="string", length=255, nullable=true)
     */
    private $loot4;


}
