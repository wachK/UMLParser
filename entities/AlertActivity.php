<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlertActivity
 * 
 * @ORM\Entity
 */
class AlertActivity extends Activity{
    /**
     * @var Alert
     *
     * @ORM\Column(name="alert", type="Alert")
     */
    private $alert;
}
