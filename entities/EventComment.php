<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventComment
 * 
 * @ORM\Entity
 */
class EventComment{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var Event
     *
     * @ORM\Column(name="event", type="Event")
     */
    private $event;
    /**
     * @var User
     *
     * @ORM\Column(name="author", type="User")
     */
    private $author;
    /**
     * @var None
     *
     * @ORM\Column(name="timestamp", type="None")
     */
    private $timestamp;
    /**
     * @var None
     *
     * @ORM\Column(name="content", type="None")
     */
    private $content;
}
