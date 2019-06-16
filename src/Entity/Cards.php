<?php

namespace app\Entity;

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
    private $cardset;

    /**
     * @var int
     *
     * @ORM\Column(name="CardNum", type="integer", nullable=false)
     */
    private $cardnum;

    /**
     * @var string
     *
     * @ORM\Column(name="CardType", type="string", length=255, nullable=false)
     */
    private $cardtype;


}
