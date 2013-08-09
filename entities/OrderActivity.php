<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderActivity
 * 
 * @ORM\Entity
 */
class OrderActivity extends Activity{
    /**
     * @var Order
     *
     * @ORM\Column(name="order", type="Order")
     */
    private $order;
}
