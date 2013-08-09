<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Access
 * 
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"TaskAccess" = "TaskAccess", "ProjectAccess" = "ProjectAccess", "OrderAccess" = "OrderAccess", "EventAccess" = "EventAccess", "CalendarAccess" = "CalendarAccess", "WarehouseAccess" = "WarehouseAccess"})
 */
class Access{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var UserContext
     *
     * @ORM\Column(name="context", type="UserContext")
     */
    private $context;
    /**
     * @var enum('ADMIN', 'EDITOR', 'VIEWER')
     *
     * @ORM\Column(name="role", type="enum('ADMIN', 'EDITOR', 'VIEWER')")
     */
    private $role;
}
