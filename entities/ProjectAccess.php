<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectAccess
 * 
 * @ORM\Entity
 */
class ProjectAccess extends Access{
    /**
     * @var Project
     *
     * @ORM\Column(name="project", type="Project")
     */
    private $project;
}
