<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 * 
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"Valuation" = "Valuation"})
 */
class Order{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var Client
     *
     * @ORM\Column(name="client", type="Client")
     */
    private $client;
    /**
     * @var OrderItem
     *
     * @ORM\Column(name="items", type="OrderItem")
     */
    private $items;
    /**
     * @var Payment
     *
     * @ORM\Column(name="payment", type="Payment")
     */
    private $payment;
    /**
     * @var OrderAccess[]
     *
     * @ORM\Column(name="access", type="OrderAccess[]")
     */
    private $access;
    /**
     * @var OrderActivity[]
     *
     * @ORM\Column(name="activities", type="OrderActivity[]")
     */
    private $activities;
    /**
     * @var None
     *
     * @ORM\Column(name="dueDate", type="None")
     */
    private $dueDate;
    /**
     * @var None
     *
     * @ORM\Column(name="remarks", type="None")
     */
    private $remarks;
}
