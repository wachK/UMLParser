<?php

namespace My\NS;

use DoctrineORM as ORM;

/**
 * Weed
 * 
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"AutoWeed" = "AutoWeed", "RegularWeed" = "RegularWeed", "DieselRyder" = "DieselRyder", "Ak47Auto" = "Ak47Auto"})
 */
class Weed {
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string")
     */
    private $name;
    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string")
     */
    private $description;
}
