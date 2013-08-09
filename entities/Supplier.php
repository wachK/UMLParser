<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier
 * 
 * @ORM\Entity
 */
class Supplier extends Contact{
    /**
     * @var Product[]
     *
     * @ORM\Column(name="products", type="Product[]")
     */
    private $products;
}
