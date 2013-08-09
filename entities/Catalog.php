<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catalog
 * 
 * @ORM\Entity
 */
class Catalog{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var None
     *
     * @ORM\Column(name="name", type="None")
     */
    private $name;
    /**
     * @var None
     *
     * @ORM\Column(name="description", type="None")
     */
    private $description;
    /**
     * @var Contact
     *
     * @ORM\Column(name="supplier", type="Contact")
     */
    private $supplier;
    /**
     * @var Article[]
     *
     * @ORM\Column(name="articles", type="Article[]")
     */
    private $articles;
}
