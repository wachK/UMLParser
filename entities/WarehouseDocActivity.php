<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WarehouseDocActivity
 * 
 * @ORM\Entity
 */
class WarehouseDocActivity extends Activity{
    /**
     * @var WarehouseDoc
     *
     * @ORM\Column(name="doc", type="WarehouseDoc")
     */
    private $doc;
}
