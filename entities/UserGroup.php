<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserGroup
 * 
 * @ORM\Entity
 */
class UserGroup extends UserContext{
    /**
     * @var None
     *
     * @ORM\Column(name="name", type="None")
     */
    private $name;
}
