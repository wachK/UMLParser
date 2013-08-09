<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contractor
 * 
 * @ORM\Entity
 */
class Contractor extends Contact{
    /**
     * @var Service[]
     *
     * @ORM\Column(name="services", type="Service[]")
     */
    private $services;
}
