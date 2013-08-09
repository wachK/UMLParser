<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterestAudit
 * 
 * @ORM\Entity
 */
class InterestAudit extends Interest{
    /**
     * @var None
     *
     * @ORM\Column(name="timestamp", type="None")
     */
    private $timestamp;
    /**
     * @var Interest
     *
     * @ORM\Column(name="interest", type="Interest")
     */
    private $interest;
}
