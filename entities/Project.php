<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 * 
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"ProjectAudit" = "ProjectAudit"})
 */
class Project{
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
     * @var ProjectAccess[]
     *
     * @ORM\Column(name="access", type="ProjectAccess[]")
     */
    private $access;
    /**
     * @var ProjectActivity[]
     *
     * @ORM\Column(name="activities", type="ProjectActivity[]")
     */
    private $activities;
    /**
     * @var None
     *
     * @ORM\Column(name="path", type="None")
     */
    private $path;
}
