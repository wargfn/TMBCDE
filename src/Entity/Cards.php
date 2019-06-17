<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cards
 *
 * @ORM\Table(name="Cards")
 * @ORM\Entity
 */
class Cards
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
     * @ORM\Column(name="CardSet", type="string", length=255, nullable=false)
     */
    private $cardSet;

    /**
     * @var int
     *
     * @ORM\Column(name="CardNum", type="integer", nullable=false)
     */
    private $cardNum;

    /**
     * @var string
     *
     * @ORM\Column(name="CardType", type="string", length=255, nullable=false)
     */
    private $cardType;

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
    public function getCardSet()
    {
        return $this->cardSet;
    }
    /**
     * @param mixed $cardSet
     */
    public function setCardSet($cardSet)
    {
        $this->cardSet = $cardSet;
    }

    /**
     * @return mixed
     */
    public function getCardNum()
    {
        return $this->cardNum;
    }
    /**
     * @param mixed $cardNum
     */
    public function setCardNum($cardNum)
    {
        $this->cardNum = $cardNum;
    }

    /**
     * @return mixed
     */
    public function getCardType()
    {
        return $this->cardType;
    }
    /**
     * @param mixed $cardType
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
    }
}
