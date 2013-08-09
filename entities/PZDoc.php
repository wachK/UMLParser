<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PZDoc
 * 
 * @ORM\Entity
 */
class PZDoc extends WarehouseDoc{
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
     * @var None
     *
     * @ORM\Column(name="invoiceNo", type="None")
     */
    private $invoiceNo;
}
