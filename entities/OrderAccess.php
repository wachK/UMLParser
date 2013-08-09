<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderAccess
 * 
 * @ORM\Entity
 */
class OrderAccess extends Access{
    /**
     * @var Order
     *
     * @ORM\Column(name="order", type="Order")
     */
    private $order;
}
