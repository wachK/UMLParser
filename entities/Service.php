<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 * 
 * @ORM\Entity
 */
class Service extends Article{
    /**
     * @var Contractor
     *
     * @ORM\Column(name="contractor", type="Contractor")
     */
    private $contractor;
}
