<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PWDoc
 * 
 * @ORM\Entity
 */
class PWDoc extends WarehouseDoc{
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
}
