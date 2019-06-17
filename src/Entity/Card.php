<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Card
 *
 * @ORM\Table(name="card")
 * @ORM\Entity
 */
class Card
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="cardset", type="string", length=255, nullable=false)
     */
    private $cardset;

    /**
     * @var int
     *
     * @ORM\Column(name="cardnum", type="integer", nullable=false)
     */
    private $cardnum;

    /**
     * @var string
     *
     * @ORM\Column(name="cardtype", type="string", length=255, nullable=false)
     */
    private $cardtype;


}
