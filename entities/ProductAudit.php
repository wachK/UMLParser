<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductAudit
 * 
 * @ORM\Entity
 */
class ProductAudit extends Product{
    /**
     * @var None
     *
     * @ORM\Column(name="timestamp", type="None")
     */
    private $timestamp;
    /**
     * @var Product
     *
     * @ORM\Column(name="product", type="Product")
     */
    private $product;
}
