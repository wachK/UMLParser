<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectAudit
 * 
 * @ORM\Entity
 */
class ProjectAudit extends Project{
    /**
     * @var None
     *
     * @ORM\Column(name="timestamp", type="None")
     */
    private $timestamp;
    /**
     * @var Project
     *
     * @ORM\Column(name="project", type="Project")
     */
    private $project;
}
