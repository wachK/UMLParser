<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventActivity
 * 
 * @ORM\Entity
 */
class EventActivity extends Activity{
    /**
     * @var Event
     *
     * @ORM\Column(name="event", type="Event")
     */
    private $event;
}
