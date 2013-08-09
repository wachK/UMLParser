<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectEvent
 * 
 * @ORM\Entity
 */
class ProjectEvent extends Event{
    /**
     * @var Project
     *
     * @ORM\Column(name="project", type="Project")
     */
    private $project;
}
