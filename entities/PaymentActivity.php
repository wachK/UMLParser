<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentActivity
 * 
 * @ORM\Entity
 */
class PaymentActivity extends Activity{
    /**
     * @var Payment
     *
     * @ORM\Column(name="payment", type="Payment")
     */
    private $payment;
    /**
     * @var None
     *
     * @ORM\Column(name="amount", type="None")
     */
    private $amount;
}
