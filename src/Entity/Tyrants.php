<?php

namespace app\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tyrants
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


}
