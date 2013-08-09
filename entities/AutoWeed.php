<?php

namespace My\NS;

use DoctrineORM as ORM;

/**
 * AutoWeed
 * 
 * @ORM\Entity
 */
class AutoWeed extends Weed {
    /**
     * @var integer
     *
     * @ORM\Column(name="autoPeriod", type="integer")
     */
    private $autoPeriod;
}
