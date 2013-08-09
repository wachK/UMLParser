<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MMDoc
 * 
 * @ORM\Entity
 */
class MMDoc extends WarehouseDoc{
    /**
     * @var Contact
     *
     * @ORM\Column(name="supplier", type="Contact")
     */
    private $supplier;
    /**
     * @var Contact
     *
     * @ORM\Column(name="recipient", type="Contact")
     */
    private $recipient;
    /**
     * @var Warehouse
     *
     * @ORM\Column(name="warehouseRecv", type="Warehouse")
     */
    private $warehouseRecv;
}
