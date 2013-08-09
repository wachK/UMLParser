<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WarehouseDocItem
 * 
 * @ORM\Entity
 */
class WarehouseDocItem{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var WarehouseDoc
     *
     * @ORM\Column(name="doc", type="WarehouseDoc")
     */
    private $doc;
    /**
     * @var Product
     *
     * @ORM\Column(name="product", type="Product")
     */
    private $product;
    /**
     * @var None
     *
     * @ORM\Column(name="quantity", type="None")
     */
    private $quantity;
    /**
     * @var None
     *
     * @ORM\Column(name="price", type="None")
     */
    private $price;
}
