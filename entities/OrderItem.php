<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderItem
 * 
 * @ORM\Entity
 */
class OrderItem{
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
     * @var Article
     *
     * @ORM\Column(name="article", type="Article")
     */
    private $article;
    /**
     * @var None
     *
     * @ORM\Column(name="quantity", type="None")
     */
    private $quantity;
    /**
     * @var None
     *
     * @ORM\Column(name="price", type="None")
     */
    private $price;
}
