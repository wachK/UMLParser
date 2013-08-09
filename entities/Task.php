<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 * 
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"ProjectTask" = "ProjectTask"})
 */
class Task{
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
     * @var None
     *
     * @ORM\Column(name="description", type="None")
     */
    private $description;
    /**
     * @var None
     *
     * @ORM\Column(name="isDone", type="None")
     */
    private $isDone;
    /**
     * @var TaskAccess[]
     *
     * @ORM\Column(name="access", type="TaskAccess[]")
     */
    private $access;
    /**
     * @var None
     *
     * @ORM\Column(name="priority", type="None")
     */
    private $priority;
}
