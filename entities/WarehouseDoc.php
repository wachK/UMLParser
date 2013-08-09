<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WarehouseDoc
 * 
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"WZDoc" = "WZDoc", "PWDoc" = "PWDoc", "RWDoc" = "RWDoc", "MMDoc" = "MMDoc", "PZDoc" = "PZDoc"})
 */
class WarehouseDoc{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var None
     *
     * @ORM\Column(name="date", type="None")
     */
    private $date;
    /**
     * @var None
     *
     * @ORM\Column(name="supplierSign", type="None")
     */
    private $supplierSign;
    /**
     * @var None
     *
     * @ORM\Column(name="recipientSign", type="None")
     */
    private $recipientSign;
    /**
     * @var None
     *
     * @ORM\Column(name="confirmerSign", type="None")
     */
    private $confirmerSign;
    /**
     * @var Warehouse
     *
     * @ORM\Column(name="warehouse", type="Warehouse")
     */
    private $warehouse;
    /**
     * @var WarehouseDocItem[]
     *
     * @ORM\Column(name="items", type="WarehouseDocItem[]")
     */
    private $items;
}
