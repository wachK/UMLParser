<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectTask
 * 
 * @ORM\Entity
 */
class ProjectTask extends Task{
    /**
     * @var Project
     *
     * @ORM\Column(name="project", type="Project")
     */
    private $project;
}
