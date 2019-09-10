<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BATs Build-A-Tyrant
 *
 * @ORM\Table(name="BATs")
 * @ORM\Entity
 */
 
class BATs
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
     * @var int
     *
     * @ORM\Column(name="Days", type="integer", nullable=false)
     */
    private $days;

    /**
     * @var int
     *
     * @ORM\Column(name="Progress", type="integer", nullable=false)
     */
    private $progress;

    /**
     * @var int
     *
     * @ORM\Column(name="Health", type="integer", nullable=false)
     */
    private $health;

    /**
     * @var int
     *
     * @ORM\Column(name="Initiative", type="integer", nullable=false)
     */
    private $ini;

    /**
     * @var int
     *
     * @ORM\Column(name="Attack", type="integer", nullable=false)
     */
    private $atk;

    /**
     * @var int
     *
     * @ORM\Column(name="Defense", type="integer", nullable=false)
     */
    private $def;

    /**
     * @var string
     *
     * @ORM\Column(name="TyrantDie1", type="string", length=255, nullable=true)
     */
    private $tdie1;

    /**
     * @var string
     *
     * @ORM\Column(name="TyrantDie2", type="string", length=255, nullable=true)
     */
    private $tdie2;

    /**
     * @var string
     *
     * @ORM\Column(name="TyrantDie3", type="string", length=255, nullable=true)
     */
    private $tdie3;

    /**
     * @var int
     *
     * @ORM\Column(name="Range", type="integer", nullable=false)
     */
    private $range;

    /**
     * @var int
     *
     * @ORM\Column(name="Target", type="integer", nullable=false)
     */
    private $target;

    /**
     * @var int
     *
     * @ORM\Column(name="Skull", type="integer", nullable=false)
     */
    private $skull;

    /**
     * @var string
     *
     * @ORM\Column(name="Skills1", type="string", length=255, nullable=true)
     */
    private $skill1;

    /**
     * @var string
     *
     * @ORM\Column(name="Skills2", type="string", length=255, nullable=true)
     */
    private $skill2;

    /**
     * @var string
     *
     * @ORM\Column(name="Skills3", type="string", length=255, nullable=true)
     */
    private $skill3;

    /**
     * @var string
     *
     * @ORM\Column(name="Baddie1", type="string", length=255, nullable=true)
     */
    private $baddie1;

    /**
     * @var string
     *
     * @ORM\Column(name="Baddie2", type="string", length=255, nullable=true)
     */
    private $baddie2;

    /**
     * @var string
     *
     * @ORM\Column(name="Baddie3", type="string", length=255, nullable=true)
     */
    private $baddie3;

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
     * @return int
     */
    public function getDays(): int
    {
        return $this->days;
    }

    /**
     * @param int $days
     */
    public function setDays(int $days): void
    {
        $this->days = $days;
    }

    /**
     * @return int
     */
    public function getProgress(): int
    {
        return $this->progress;
    }

    /**
     * @param int $progress
     */
    public function setProgress(int $progress): void
    {
        $this->progress = $progress;
    }

    /**
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * @param int $health
     */
    public function setHealth(int $health): void
    {
        $this->health = $health;
    }

    /**
     * @return int
     */
    public function getIni(): int
    {
        return $this->ini;
    }

    /**
     * @param int $ini
     */
    public function setIni(int $ini): void
    {
        $this->ini = $ini;
    }

    /**
     * @return int
     */
    public function getAtk(): int
    {
        return $this->atk;
    }

    /**
     * @param int $atk
     */
    public function setAtk(int $atk): void
    {
        $this->atk = $atk;
    }

    /**
     * @return int
     */
    public function getDef(): int
    {
        return $this->def;
    }

    /**
     * @param int $def
     */
    public function setDef(int $def): void
    {
        $this->def = $def;
    }

    /**
     * @return string
     */
    public function getTdie1(): string
    {
        return $this->tdie1;
    }

    /**
     * @param string $tdie1
     */
    public function setTdie1(string $tdie1): void
    {
        $this->tdie1 = $tdie1;
    }

    /**
     * @return string
     */
    public function getTdie2(): string
    {
        return $this->tdie2;
    }

    /**
     * @param string $tdie2
     */
    public function setTdie2(string $tdie2): void
    {
        $this->tdie2 = $tdie2;
    }

    /**
     * @return string
     */
    public function getTdie3(): string
    {
        return $this->tdie3;
    }

    /**
     * @param string $tdie3
     */
    public function setTdie3(string $tdie3): void
    {
        $this->tdie3 = $tdie3;
    }

    /**
     * @return int
     */
    public function getRange(): int
    {
        return $this->range;
    }

    /**
     * @param int $range
     */
    public function setRange(int $range): void
    {
        $this->range = $range;
    }

    /**
     * @return int
     */
    public function getTarget(): int
    {
        return $this->target;
    }

    /**
     * @param int $target
     */
    public function setTarget(int $target): void
    {
        $this->target = $target;
    }

    /**
     * @return int
     */
    public function getSkull(): int
    {
        return $this->skull;
    }

    /**
     * @param int $skull
     */
    public function setSkull(int $skull): void
    {
        $this->skull = $skull;
    }

    /**
     * @return string
     */
    public function getSkill1(): string
    {
        return $this->skill1;
    }

    /**
     * @param string $skill1
     */
    public function setSkill1(string $skill1): void
    {
        $this->skill1 = $skill1;
    }

    /**
     * @return string
     */
    public function getSkill2(): string
    {
        return $this->skill2;
    }

    /**
     * @param string $skill2
     */
    public function setSkill2(string $skill2): void
    {
        $this->skill2 = $skill2;
    }

    /**
     * @return string
     */
    public function getSkill3(): string
    {
        return $this->skill3;
    }

    /**
     * @param string $skill3
     */
    public function setSkill3(string $skill3): void
    {
        $this->skill3 = $skill3;
    }

    /**
     * @return string
     */
    public function getBaddie1(): string
    {
        return $this->baddie1;
    }

    /**
     * @param string $baddie1
     */
    public function setBaddie1(string $baddie1): void
    {
        $this->baddie1 = $baddie1;
    }

    /**
     * @return string
     */
    public function getBaddie2(): string
    {
        return $this->baddie2;
    }

    /**
     * @param string $baddie2
     */
    public function setBaddie2(string $baddie2): void
    {
        $this->baddie2 = $baddie2;
    }

    /**
     * @return string
     */
    public function getBaddie3(): string
    {
        return $this->baddie3;
    }

    /**
     * @param string $baddie3
     */
    public function setBaddie3(string $baddie3): void
    {
        $this->baddie3 = $baddie3;
    }

}