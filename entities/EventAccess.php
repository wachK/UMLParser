<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventAccess
 * 
 * @ORM\Entity
 */
class EventAccess extends Access{
    /**
     * @var Event
     *
     * @ORM\Column(name="event", type="Event")
     */
    private $event;
}
