<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecurringEvent
 * 
 * @ORM\Entity
 */
class RecurringEvent extends Event{
    /**
     * @var None
     *
     * @ORM\Column(name="nth", type="None")
     */
    private $nth;
    /**
     * @var None
     *
     * @ORM\Column(name="max_date", type="None")
     */
    private $max_date;
    /**
     * @var None
     *
     * @ORM\Column(name="max_count", type="None")
     */
    private $max_count;
}
