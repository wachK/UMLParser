<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceAudit
 * 
 * @ORM\Entity
 */
class ServiceAudit extends Service{
    /**
     * @var None
     *
     * @ORM\Column(name="timestamp", type="None")
     */
    private $timestamp;
    /**
     * @var Service
     *
     * @ORM\Column(name="service", type="Service")
     */
    private $service;
}
