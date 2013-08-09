<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendarAccess
 * 
 * @ORM\Entity
 */
class CalendarAccess extends Access{
    /**
     * @var Calendar
     *
     * @ORM\Column(name="calendar", type="Calendar")
     */
    private $calendar;
}
