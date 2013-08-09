<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 * 
 * @ORM\Entity
 */
class User extends Contact{
    /**
     * @var None
     *
     * @ORM\Column(name="password", type="None")
     */
    private $password;
    /**
     * @var UserContext[]
     *
     * @ORM\Column(name="contexts", type="UserContext[]")
     */
    private $contexts;
}
