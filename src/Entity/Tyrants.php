<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TyrantsController
 *
 * @ORM\Table(name="Tyrants")
 * @ORM\Entity
 */
class Tyrants
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
    public function getDays()
    {
        return $this->days;
    }
    /**
     * @param mixed $days
     */
    public function setDays($days)
    {
        $this->days = $days;
    }
    /**
     * @return mixed
     */
    public function getProgress()
    {
        return $this->progress;
    }
    /**
     * @param mixed $progress
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;
    }




}
