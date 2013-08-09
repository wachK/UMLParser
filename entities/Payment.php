<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 * 
 * @ORM\Entity
 */
class Payment{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var Order
     *
     * @ORM\Column(name="order", type="Order")
     */
    private $order;
    /**
     * @var PaymentForm
     *
     * @ORM\Column(name="form", type="PaymentForm")
     */
    private $form;
    /**
     * @var PaymentActivity[]
     *
     * @ORM\Column(name="activities", type="PaymentActivity[]")
     */
    private $activities;
    /**
     * @var None
     *
     * @ORM\Column(name="amount", type="None")
     */
    private $amount;
    /**
     * @var None
     *
     * @ORM\Column(name="deadline", type="None")
     */
    private $deadline;
    /**
     * @var Interest
     *
     * @ORM\Column(name="interest", type="Interest")
     */
    private $interest;
}
