<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activity
 * 
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"WarehouseDocActivity" = "WarehouseDocActivity", "AlertActivity" = "AlertActivity", "OrderActivity" = "OrderActivity", "ProjectActivity" = "ProjectActivity", "EventActivity" = "EventActivity", "PaymentActivity" = "PaymentActivity"})
 */
class Activity{
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
     * @ORM\Column(name="timestamp", type="None")
     */
    private $timestamp;
    /**
     * @var None
     *
     * @ORM\Column(name="title", type="None")
     */
    private $title;
}
