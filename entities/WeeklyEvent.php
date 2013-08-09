<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeeklyEvent
 * 
 * @ORM\Entity
 */
class WeeklyEvent extends RecurringEvent{
    /**
     * @var int[]
     *
     * @ORM\Column(name="weekDays", type="int[]")
     */
    private $weekDays;
}
