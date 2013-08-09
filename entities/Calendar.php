<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendar
 * 
 * @ORM\Entity
 */
class Calendar{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var None
     *
     * @ORM\Column(name="name", type="None")
     */
    private $name;
    /**
     * @var Event[]
     *
     * @ORM\Column(name="events", type="Event[]")
     */
    private $events;
    /**
     * @var CalendarAccess[]
     *
     * @ORM\Column(name="access", type="CalendarAccess[]")
     */
    private $access;
    /**
     * @var None
     *
     * @ORM\Column(name="description", type="None")
     */
    private $description;
}
