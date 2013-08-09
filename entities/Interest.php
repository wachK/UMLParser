<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interest
 * 
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"InterestAudit" = "InterestAudit"})
 */
class Interest{
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
     * @ORM\Column(name="rate", type="None")
     */
    private $rate;
}
