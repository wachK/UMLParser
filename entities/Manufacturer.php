<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Manufacturer
 * 
 * @ORM\Entity
 */
class Manufacturer extends Contact{
    /**
     * @var Product[]
     *
     * @ORM\Column(name="products", type="Product[]")
     */
    private $products;
}
