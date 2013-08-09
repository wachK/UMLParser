<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentForm
 * 
 * @ORM\Entity
 */
class PaymentForm{
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
     * @ORM\Column(name="deadline (days)", type="None")
     */
    private $deadline (days);
}
