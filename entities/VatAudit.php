<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VatAudit
 * 
 * @ORM\Entity
 */
class VatAudit extends Vat{
    /**
     * @var None
     *
     * @ORM\Column(name="timestamp", type="None")
     */
    private $timestamp;
    /**
     * @var Vat
     *
     * @ORM\Column(name="vat", type="Vat")
     */
    private $vat;
}
