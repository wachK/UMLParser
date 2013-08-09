<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 * 
 * @ORM\Entity
 */
class Product extends Article{
    /**
     * @var Manufacturer
     *
     * @ORM\Column(name="manufacturer", type="Manufacturer")
     */
    private $manufacturer;
    /**
     * @var Supplier
     *
     * @ORM\Column(name="supplier", type="Supplier")
     */
    private $supplier;
    /**
     * @var None
     *
     * @ORM\Column(name="code", type="None")
     */
    private $code;
}
