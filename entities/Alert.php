<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alert
 * 
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"EmailAlert" = "EmailAlert", "PopupAlert" = "PopupAlert"})
 */
class Alert{
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
     * @var None
     *
     * @ORM\Column(name="offset", type="None")
     */
    private $offset;
}
