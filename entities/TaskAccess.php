<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaskAccess
 * 
 * @ORM\Entity
 */
class TaskAccess extends Access{
    /**
     * @var Task
     *
     * @ORM\Column(name="task", type="Task")
     */
    private $task;
}
