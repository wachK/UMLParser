<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 * 
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"Service" = "Service", "Product" = "Product", "ProductAudit" = "ProductAudit", "ServiceAudit" = "ServiceAudit"})
 */
class Article{
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
     * @var ArticleGroup
     *
     * @ORM\Column(name="group", type="ArticleGroup")
     */
    private $group;
    /**
     * @var Catalog
     *
     * @ORM\Column(name="catalog", type="Catalog")
     */
    private $catalog;
    /**
     * @var None
     *
     * @ORM\Column(name="unit", type="None")
     */
    private $unit;
    /**
     * @var None
     *
     * @ORM\Column(name="price", type="None")
     */
    private $price;
    /**
     * @var Vat
     *
     * @ORM\Column(name="vat", type="Vat")
     */
    private $vat;
    /**
     * @var None
     *
     * @ORM\Column(name="available", type="None")
     */
    private $available;
    /**
     * @var None
     *
     * @ORM\Column(name="description", type="None")
     */
    private $description;
}
