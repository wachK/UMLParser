<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 * 
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"RecurringEvent" = "RecurringEvent", "ProjectEvent" = "ProjectEvent", "WeeklyEvent" = "WeeklyEvent", "SingleEvent" = "SingleEvent", "AnnuallyEvent" = "AnnuallyEvent", "MonthlyEvent" = "MonthlyEvent", "DailyEvent" = "DailyEvent"})
 */
class Event{
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
     * @var User
     *
     * @ORM\Column(name="author", type="User")
     */
    private $author;
    /**
     * @var EventAccess[]
     *
     * @ORM\Column(name="access", type="EventAccess[]")
     */
    private $access;
    /**
     * @var EventActivity[]
     *
     * @ORM\Column(name="activities", type="EventActivity[]")
     */
    private $activities;
    /**
     * @var EventComment[]
     *
     * @ORM\Column(name="comments", type="EventComment[]")
     */
    private $comments;
    /**
     * @var None
     *
     * @ORM\Column(name="description", type="None")
     */
    private $description;
    /**
     * @var None
     *
     * @ORM\Column(name="begin", type="None")
     */
    private $begin;
    /**
     * @var None
     *
     * @ORM\Column(name="finish", type="None")
     */
    private $finish;
    /**
     * @var None
     *
     * @ORM\Column(name="priority", type="None")
     */
    private $priority;
}
