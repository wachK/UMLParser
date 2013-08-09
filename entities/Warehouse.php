<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Warehouse
 * 
 * @ORM\Entity
 */
class Warehouse{
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
     * @var WarehouseAccess[]
     *
     * @ORM\Column(name="access", type="WarehouseAccess[]")
     */
    private $access;
}
