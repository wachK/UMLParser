<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectActivity
 * 
 * @ORM\Entity
 */
class ProjectActivity extends Activity{
    /**
     * @var Project
     *
     * @ORM\Column(name="project", type="Project")
     */
    private $project;
    /**
     * @var User
     *
     * @ORM\Column(name="user", type="User")
     */
    private $user;
    /**
     * @var None
     *
     * @ORM\Column(name="description", type="None")
     */
    private $description;
}
