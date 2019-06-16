<?php // src/Entity/Card.php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="card")
 */
class Article {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    public $name;
    /**
     * @ORM\Column(type="string", length=255)
     */
    public $set;
    /**
    *@ORM\Column(type="integer")
    */
    public $cardnum;
    /**
    *@ORM\Column(type="string", length=255)
    */
    public $type;
    
    //Getters and Setters
}
