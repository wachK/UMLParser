<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WarehouseAccess
 * 
 * @ORM\Entity
 */
class WarehouseAccess extends Access{
    /**
     * @var Warehouse
     *
     * @ORM\Column(name="warehouse", type="Warehouse")
     */
    private $warehouse;
}
